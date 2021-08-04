<div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> {{ config('application.appVersion') }}
        </div>
        <strong>
            Copyright &copy; 2014-{{ date('Y') }} <a
                href="{{ config('application.webUrl') }}">{{ config('application.webAppName') }}</a>.
        </strong>
        All rights reserved.
    </footer>
</div>