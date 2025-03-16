@include('include.header')

<div class="main-wrapper page-aboutus">
    <section class="about-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 border shadow p-4 p-md-5">
                    <form>
                        <h3 class="text-capitalize text-center pb-2">Customer Login</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="text-right pb-3">
                            <a href="/register" class="text-dark">Not a user? Click here to register</a>
                        </div>
                        <div>
                            <button style="background-color: #a91d3b;" class="btn btn-md text-white bold w-100">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@include('include.footer')

<script>
</script>