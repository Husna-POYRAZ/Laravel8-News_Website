@extends('layouts.home')

@section('title', 'References - '.$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="{{route('references')}}">References</a></li>
                </ol>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">

                    {!! $setting->references !!}
            </div>
            <div class="entry-content">
                <p>BBC Digital is the world leader in online news and information and seeks to inform, engage and empower the world. Staffed 24 hours, seven days a week by a dedicated team in BBC bureaus around the world, BBC's digital platforms deliver news from almost 4,000 journalists in every corner of the globe.</p>
                <br><br><br>
                <div class="row align-items-center justify-content-center my-4">
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.acunetix.com" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/acunetix-t-1.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.avecto.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/avecto.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/beyondtrust.png" width="150">
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.carbonblack.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/carbon-black-4.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;"></a></div><div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.centrify.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/centrify-1.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.cequence.ai/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/cequence.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.checkpoint.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/Check_Point_logo.svg_.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.cylance.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/cylance.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.f5.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/f5_0.png" width="150" style="float: left;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.firemon.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/firemon-1.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.forescout.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/forescout-3.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.fortinet.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/fortinet.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.gemalto.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/gemalto.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.ibm.com/security" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/ibm-security_0.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.ixiacom.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/ixia_0.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.juniper.net/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/juniper_0.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.kaspersky.com.tr/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/kasperskylab-1.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.manageengine.com/tr/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/manage-engine-1.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.mcafee.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/mcafee-new.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2"><a href="https://www.observeit.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/observeit-1.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.paloaltonetworks.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/paloaltonetworks-1.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.proofpoint.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/proofpoint-1.png" width="150" style="margin-top: 10px;
      margin-bottom: 110px;">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.pulsesecure.net/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/pulse-secure.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.solarwinds.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/solarwinds_0.png" width="150">
                        </a>
                    </div>
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.sophos.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/sophos-t-1.png" width="150">
                        </a>
                    </div>
                    &nbsp;
                    <div class="col-4 col-lg-3 text-center mb-2">
                        <a href="https://www.tenable.com/" rel="external nofollow">
                            <img class="img-fluid" src="https://www.nebulabilisim.com.tr/wp-content/uploads/tenable-2.png" width="150">
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

