@isset($pageConfigs)
  {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
  lang="@if (session()->has('locale')){{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
  @if ($configData['theme'] === 'dark') data-layout="dark-layout"@endif>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description"
    content="Ayurmarts, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="Ayurmarts">
  <meta name="author" content="PIXINVENT">
  <title>{{ config('app.name', 'Ayurmarts') }}</title>
  <link rel="apple-touch-icon" href="{{ asset('images/ico/favicon-32x32.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/flag-icons.css" /> --}}


  {{-- Include core + vendor Styles --}}
  @include('admin.panels.styles')
</head>



<body class="vertical-layout vertical-menu-modern {{ $configData['bodyClass'] }} {{ $configData['theme'] === 'dark' ? 'dark-layout' : '' }} {{ $configData['blankPageClass'] }} blank-page"
  data-menu="vertical-menu-modern" data-col="blank-page" data-framework="laravel"
  data-asset-path="{{ asset('/') }}">

  <!-- BEGIN: Content-->
  <div class="app-content content {{ $configData['pageClass'] }}">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper">
      <div class="content-body">

        {{-- Include Startkit Content --}}
        @yield('content')

      </div>
    </div>
  </div>
  <!-- End: Content-->

  {{-- include default scripts --}}
  @include('admin.panels.scripts')




  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        });
      }
    })

    $(document).ready(function() {
        $('#select-field' ).select2( {
            theme: 'bootstrap-5'
        } );

        $('input[type="checkbox"]').not("[id*='check_']").bootstrapSwitch('state');
    });


  </script>

</body>

</html>
