<x-guest-layout>
    <!-- Session Status -->
    <!-- start newsletter -->
    <section class="line-bg bg-white">
        <div class="newsletter-block border-bottom">
            <div class="container">
                <div class="row gy-5 align-items-center justify-content-center text-center text-md-start">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10">
                        <div class="pe-0 pe-xl-4">
                            <h2 class="mb-3 lh-sm">Log Into Your account</h2>
                            <p class="mb-0">don't have an account <a href="{{route('register')}}">Register</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="ps-0 ps-xl-4">
                            <div id="mc_embed_signup">
                                <form action="#" method="post" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" target="_blank">
                                    <div id="mc_embed_signup_scroll" class="input-group">
                                        <input type="email" value="" name="email" class="form-control w-100"
                                            placeholder="Email" aria-label="Name">
                                        <input type="password" value="" name="password"
                                            class="form-control w-100 required email" placeholder="enter your password"
                                            aria-label="Subscription" autocomplete="new-email" required>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_92641572a6c6ec43da15feed0_d28bb2454f"
                                                tabindex="-1" value="">
                                        </div>
                                        <div class="input-group-append w-100">
                                            <button type="submit" name="subscribe" id="mc-embedded-subscribe"
                                                class="input-group-text w-100 mb-0" aria-label="Subscription Button">
                                                Login Now <i class="ti ti-arrow-up-right ms-auto"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end newsletter -->
</x-guest-layout>
