<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Session Status -->
    <!-- start newsletter -->
    <section class="line-bg bg-white">
        <div class="newsletter-block border-bottom">
            <div class="container">
                <div class="row gy-5 align-items-center justify-content-center text-center text-md-start">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10">
                        <div class="pe-0 pe-xl-4">
                            <h2 class="mb-3 lh-sm">Log Into Your account</h2>
                            <p class="mb-0">don't have an account <a href="<?php echo e(route('register')); ?>">Register</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="ps-0 ps-xl-4">
                            <div id="mc_embed_signup">
                                <form action="#" method="post" name="mc-embedded-subscribe-form" >
                                    <div id="mc_embed_signup_scroll" class="input-group">
                                        <input type="email" value="" name="email" class="form-control w-100"
                                            placeholder="Email" aria-label="Name">
                                        <input type="password" value="" name="password"
                                            class="form-control w-100 required email" placeholder="enter your password"
                                            aria-label="Subscription" autocomplete="new-email" required>
                                        <div class="input-group-append w-100">
                                            <button type="submit" name="subscribe" 
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\Users\User\Documents\whitehat\Backend Class\first_app\resources\views/auth/login.blade.php ENDPATH**/ ?>