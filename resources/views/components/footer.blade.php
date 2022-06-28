<footer class="footer {{Request::path()!='login'? 'footer-style':''}}">
    {{-- @if (Request::path()=="/")
     <div class="container text-center">
        <x-project-logo class="bd-gov-logo"/>
        <h3>উপজেলা ভূমি অফিস</h3>
        <h4>গৌড়নদী, বরিশাল</h4>
    </div>
    @endif --}}


    <div class="row col-12 footer-row">
        <div class="col-md-6"><h6>"জনসেবার জন্য প্রশাসন জনবান্ধব ভূমি সেবা"</h6></div>
        <div class="col-md-6 copyright text-xs text-muted text-lg-end">
            {{-- @if (Request::path()!="/")
            <div style="text-align: right;">
                <x-project-logo class="bd-gov-logo"/>
                <h4>উপজেলা ভূমি অফিস</h4>
                <h5>গৌড়নদী, বরিশাল</h5>
                </div>
            @endif --}}

            Template © <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a> |
            Development © <span class="font-weight-bold">Rafaeatul Kabir</span>
          </div>
    </div>

  </footer>
