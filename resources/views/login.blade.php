@include('include.header')

<div class="main-wrapper page-aboutus">
    <section class="about-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 border shadow p-4 p-md-5">
                    <form>
                        <h3 class="text-capitalize text-center pb-2">Customer Login</h3>
                        <div class="form-group">
                            <span id="mobileError" class="text-danger"></span>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <span id="passwordError" class="text-danger"></span>
                            <input type="text" maxlength="10" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="text-right pb-3">
                            <a href="/register" class="text-dark">Not a user? Click here to register</a>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0">
                                <button type="button" onclick="login()" style="background-color: #a91d3b;" class="btn btn-md text-white bold w-100">
                                    Login
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" style="background-color: #a91d3b;" class="btn btn-md text-white bold w-100">
                                    Login with OTP
                                </button>
                            </div>
                        </div>
                        <div id="invalidMessage" class="text-center text-danger mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@include('include.footer')

<script>
    const validateField = (id, errorId, errorMessage) => {
        const value = document.getElementById(id).value.trim();
        const errorElement = document.getElementById(errorId);

        if (!value) {
            errorElement.innerText = errorMessage;
            return false;
        } else {
            errorElement.innerText = "";
            return true;
        }
    };

    const login = async () => {
        const mobile = validateField('mobile', 'mobileError', 'Mobile is required');
        const password = validateField('password', 'passwordError', 'Password is required');

        if (!mobile || !password) {
            return;
        }

        try {
            const response = await axios.post('/login', {
                mobile: document.getElementById('mobile').value.trim(),
                password: document.getElementById('password').value.trim()
            });
            console.log(response.data.response)
            if (response.data.status === 500) {
                document.getElementById('mobile').classList.add('is-invalid');
                document.getElementById('password').classList.add('is-invalid');
                return document.getElementById('invalidMessage').innerText = response.data.response.message;
            } else {
                document.getElementById('mobile').classList.add('is-valid');
                document.getElementById('password').classList.add('is-valid');
                localStorage.setItem('access_token', JSON.stringify(response.data.response.access_token));
                setTimeout(() => {
                    window.location.href = '/';
                }, 500);
            }
        } catch (error) {
            console.error(error);
        }
    }
</script>