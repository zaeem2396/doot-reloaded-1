@include('include.header')

<div class="main-wrapper page-aboutus">
    <section class="about-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 border shadow p-4 p-md-5">
                    <form>
                        <h3 class="text-capitalize text-center pb-2">Create an Account</h3>

                        <!-- Two fields in a row on Desktop, stacked on Mobile -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span id="nameError" class="text-danger"></span>
                                    <input type="text" class="form-control" id="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <span id="emailError" class="text-danger"></span>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span id="mobileError" class="text-danger"></span>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <span id="addressError" class="text-danger"></span>
                            <textarea class="form-control" id="address" placeholder="Address" required></textarea>
                        </div>

                        <!-- Another row with two fields -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span id="stateError" class="text-danger"></span>
                                    <select onclick="fetchCitiesListOnStateId()" id="state" class="form-control">
                                        <option value="" selected disabled>--Select state--</option>
                                        @foreach ($state as $s)
                                        <option value="{{ $s->id }}">{{ $s->state_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span id="cityError" class="text-danger"></span>
                                    <select id="city" class="form-control">
                                        <option value="" selected disabled>--Select city--</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span id="pincodeError" class="text-danger"></span>
                            <input type="text" class="form-control" id="pincode" placeholder="Pincode" required>
                        </div>

                        <!-- Another row for password fields -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span id="passwordError" class="text-danger"></span>
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span id="confirmPasswordError" class="text-danger"></span>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-right pb-3">
                            <a href="/login" class="text-dark">Already a user? Click here to login</a>
                        </div>
                        <div class="text-center">
                            <button type="button" onclick="register()" style="background-color: #a91d3b;" class="btn btn-md text-white bold w-100">
                                Register
                            </button>
                            <span id="registerResponse" class="pt-3 text-success"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@include('include.footer')

<script>
    const fetchCitiesListOnStateId = async () => {
        const stateId = document.getElementById('state').value;
        const cityElement = document.getElementById('city');

        try {
            const response = await axios.get(`/cities/${stateId}`);
            const cities = response.data.response.data;

            cityElement.innerHTML = '<option value="" selected disabled>--Select city--</option>';

            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.innerText = city.city_name;
                cityElement.appendChild(option);
            });
        } catch (error) {
            console.error(error);
        }
    }

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

    const validatePasswordMatch = () => {
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirmPassword').value.trim();
        const errorElement = document.getElementById('confirmPasswordError');

        if (password !== confirmPassword) {
            errorElement.innerText = "Passwords do not match.";
            return false;
        } else {
            errorElement.innerText = "";
            return true;
        }
    };

    const register = async () => {
        // Validate all fields
        const isNameValid = validateField('name', 'nameError', 'Name is required.');
        const isEmailValid = validateField('email', 'emailError', 'Email is required.');
        const isMobileValid = validateField('mobile', 'mobileError', 'Mobile number is required.');
        const isAddressValid = validateField('address', 'addressError', 'Address is required.');
        const isStateValid = validateField('state', 'stateError', 'State selection is required.');
        const isCityValid = validateField('city', 'cityError', 'City selection is required.');
        const isPincodeValid = validateField('pincode', 'pincodeError', 'Pincode is required.');
        const isPasswordValid = validateField('password', 'passwordError', 'Password is required.');
        const isConfirmPasswordValid = validateField('confirmPassword', 'confirmPasswordError', 'Confirm Password is required.');
        const isPasswordMatch = validatePasswordMatch();

        // If any validation fails, stop the function execution
        if (
            !isNameValid || !isEmailValid || !isMobileValid || !isAddressValid ||
            !isStateValid || !isCityValid || !isPincodeValid || !isPasswordValid ||
            !isConfirmPasswordValid || !isPasswordMatch
        ) {
            return;
        }

        try {
            const response = await axios.post('/register', {
                name: document.getElementById('name').value.trim(),
                email: document.getElementById('email').value.trim(),
                mobile: document.getElementById('mobile').value.trim(),
                address: document.getElementById('address').value.trim(),
                state: document.getElementById('state').value.trim(),
                city: document.getElementById('city').value.trim(),
                pincode: document.getElementById('pincode').value.trim(),
                password: document.getElementById('password').value.trim()
            });

            if (response.data.status === 200) {
                document.getElementById('registerResponse').innerHTML = response.data.response.message
                setTimeout(() => {
                    window.location.href = '/login';
                }, 500);
            }
        } catch (error) {
            console.error(error);
        }
    };
</script>