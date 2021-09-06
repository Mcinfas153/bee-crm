<!DOCTYPE html>
<html>

<head>
    <title>{{ $lead->project }} Lead From {{ $lead->lead_source }} </title>
</head>

<body>
    <h3
        style="display: flex;align-items: center;justify-content: unset;font-family: monospace;font-size: 17px;font-weight: 900;">
        <span>
            <img src="https://crm.beeonline.xyz/assets/dist/img/logos/full-logo.png"
                style="width: 40px;margin-right: 10px;" />
        </span> BEE CRM
    </h3>
    <p class="color: #ff3b3b;font-size: 16px;font-weight: 700;">Congratulations! You just acquired a new lead.</p>
    <table>
        <tbody>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Name</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->name }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Email</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->email }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Mobile</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->mobile }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Inquiry</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->inquiry }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Project</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->project }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Country</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->country }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px;width: 130px; margin: 0 !important; color: #6e6e6e;"
                    scope="row">Lead Source</th>
                <td
                    style="border: 1px solid #e7e7e7; padding: 10px 22px 10px 10px; width: 230px; margin: 0 !important;font-size: 16px;color: #3a3131;">
                    {{ $lead->lead_source }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>