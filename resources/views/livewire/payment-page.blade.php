<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        @if (session()->has('message'))
                        <div class="alert alert-{{ session('alertType') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session('title') }}!</strong> {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form id="payment-form" action="{{ route('payments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" id="plan" value="{{ request('plan') }}">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="card-holder-name" class="form-control" value=""
                                    placeholder="Name on the card">
                            </div>
                            <div class="form-group">
                                <label for="">Card details</label>
                                <div id="card-element"></div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-2" id="card-button"
                                data-secret="{{ $data['intent']->client_secret }}">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const loader = $('.loading');
        const stripe = Stripe('{{ config('cashier.key') }}')
    
        const elements = stripe.elements()
        const cardElement = elements.create('card')
    
        cardElement.mount('#card-element')
    
        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')
    
        form.addEventListener('submit', async (e) => {
            e.preventDefault()
            loader.show();            
    
            cardBtn.disabled = true
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )
    
            if(error) {
                cardBtn.disable = false;
                loader.hide();
            } else {
                
                let token = document.createElement('input')
    
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
    
                form.appendChild(token)
    
                form.submit();                               
            }
        })
    </script>
</div>