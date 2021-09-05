<!DOCTYPE html>
<html>

<head>
    <title>{{ $lead->project }} Lead From {{ $lead->lead_source }} </title>
</head>

<style>
    .logoText {
        display: flex;
        align-items: center;
        justify-content: unset;
        font-family: monospace;
        font-size: 17px;
        font-weight: 900;
    }

    .logo {
        width: 40px;
        margin-right: 10px;
    }

    .wish__text {
        color: #ff3b3b;
        font-size: 16px;
        font-weight: 700;
    }

    tbody>tr>td {
        border: 1px solid #e7e7e7;
        padding: 10px 22px 10px 10px;
        width: 230px;
        margin: 0 !important;
        font-size: 16px;
        color: #3a3131;
    }

    tbody>tr>th {
        border: 1px solid #e7e7e7;
        padding: 10px 22px 10px 10px;
        width: 130px;
        margin: 0 !important;
        color: #6e6e6e;
    }
</style>

<body>
    <h3 class="logoText">
        <span>
            <img src="https://crm.beeonline.xyz/assets/dist/img/logos/full-logo.png" class="logo" />
        </span> BEE CRM
    </h3>
    <p class="wish__text">Congratulations! You just acquired a new lead.</p>
    <table>
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $lead->name }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $lead->email }}</td>
            </tr>
            <tr>
                <th scope="row">Mobile</th>
                <td>{{ $lead->mobile }}</td>
            </tr>
            <tr>
                <th scope="row">Inquiry</th>
                <td>{{ $lead->inquiry }}</td>
            </tr>
            <tr>
                <th scope="row">Project</th>
                <td>{{ $lead->project }}</td>
            </tr>
            <tr>
                <th scope="row">Country</th>
                <td>{{ $lead->country }}</td>
            </tr>
            <tr>
                <th scope="row">Lead Source</th>
                <td>{{ $lead->lead_source }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>