<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{$data->name}}</title>
    <link rel="stylesheet" href="{{asset('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script class="u-script" type="text/javascript" src="{{asset('js/jquery.js')}}" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js')}}" "="" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.svg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-eddb"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="951" data-image-height="280">
          <img src="{{asset('images/logo.svg')}}" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-10 u-valign-middle u-section-1" id="carousel_350c">
      <div class="u-custom-color-1 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-container-style u-group u-radius-10 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h3 class="u-custom-font u-font-open-sans u-text u-text-1">Contact Info</h3>
            <hr>
          <div class="row">
              <div class="col-6">
                  <h3>{{$data->name}}</h3>
                  <a href="#" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-1">
              <span class="u-icon u-text-custom-color-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                      <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                  </svg>
              </span>{{$data->designation}}
                  </a>
                  <a href="tel:{{$data->phone_1}}" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-1">
              <span class="u-icon u-text-custom-color-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
              </span>{{$data->phone_1}}
                  </a>
                  @if(!empty($data->phone_2))
                      <a href="tel:{{$data->phone_2}}" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-1"><span class="u-icon u-text-custom-color-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                    </span>&nbsp;{{$data->phone_2}}
                      </a>
                  @endif
                  <a href="mailto:{{$data->email}}" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-2"><span class="u-icon u-text-custom-color-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg></span>&nbsp;{{$data->email}}
                  </a>
                  <a href="{{$data->website_link}}" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-2"><span class="u-icon u-text-custom-color-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                  </svg></span>&nbsp;{{$data->website_link}}
                  </a>
                  </a>
              </div>
              <div class="col-6 text-center">
                  <img src="{{asset('storage/contact-images/'.$data->image)}}" width="155">
              </div>
          </div>
            <div class="row">
                <a href="{{$data->google_map_link}}" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-custom-color-1 u-btn-2"><span class="u-icon u-text-custom-color-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></span>{!! $data->address !!}
                <div class="col-12 text-center">
                    <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                        <a href="{{route('vc.generate',['uid' => $data->unique_id])}}" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-3">ADD TO CONTACT</a>
                    </div>
                </div>
            </div>

        </div>
      </div>
    </section>

</body></html>
