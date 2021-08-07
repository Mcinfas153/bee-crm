<div>
    <script>
        let title = {!! json_encode($title, JSON_HEX_TAG) !!};
        let icon = {!! json_encode($icon, JSON_HEX_TAG) !!};
        let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    Toast.fire({
			icon: icon,
			title: title
		  })
    </script>
</div>