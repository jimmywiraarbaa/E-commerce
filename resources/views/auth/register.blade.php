@extends('layouts.auth')

@section('title')
    Pendaftaran Pengguna
@endsection

@section('content')
    <div class="page-content page-auth" id="register">
        <section class="section-store-auth">
            <div class="container">
                <div
                class="row align-content-center justify-content-center row-login"
                    >
                    <div class="col-lg-5">
                        <h2>
                            Daftar akun dulu buk,  <br />
                            happy shopping!!!
                        </h2>
                        <form method="POST" action="{{ route('register') }}" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input  id="name" 
                                        type="text" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        name="name" value="{{ old('name') }}" 
                                        required autocomplete="name" 
                                        v-model="name"
                                        autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input  id="email" 
                                        type="email"
                                        placeholder="contoh@gmail.com" 
                                        v-model="email"
                                        @change="checkForEmailAvailability()"
                                        class="form-control @error('email') is-invalid @enderror" 
                                        :class="{ 'is-invalid' : this.email_unavailable }"
                                        name="email" value="{{ old('email') }}"       
                                        required autocomplete="email"                                       
                                        >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input  id="password" type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirmation">Konfirmasi Kata Sandi</label>
                                <input  id="password-confirmation" type="password" 
                                        class="form-control @error('password_confirmation') is-invalid @enderror" 
                                        name="password_confirmation" required autocomplete="new-password">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tokomu</label>
                                <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                                <div
                                    class="custom-control custom-radio custom-control-inline"
                                >
                                    <input
                                        type="radio"
                                        class="custom-control-input"
                                        name="is_store_open"
                                        id="openStoreTrue"
                                        v-model="is_store_open"
                                        :value="true"
                                    />
                                    <label for="openStoreTrue" class="custom-control-label"
                                        >Iya, Boleh</label
                                    >
                                    </div>
                                    <div
                                    class="custom-control custom-radio custom-control-inline"
                                    >
                                    <input
                                        type="radio"
                                        class="custom-control-input"
                                        name="is_store_open"
                                        id="openStoreFalse"
                                        v-model="is_store_open"
                                        :value="false"
                                    />
                                    <label for="openStoreFalse" class="custom-control-label"
                                        >Enggak, makasih</label
                                    >
                                </div>
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label for="store_name">Nama Toko</label>
                                <input  id="store_name" 
                                        type="text" 
                                        class="form-control @error('store_name') is-invalid @enderror" 
                                        name="store_name"
                                        required autocomplete
                                        v-model="store_name">

                                @error('store_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label>Kategori Toko</label>
                                <select name="categories_id"class="form-control">
                                <option value="" disabled selected>Pilih Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-success btn-block px-4 mt-4"
                                :disabled="this.email_unavailable"
                                style="background-color: rgb(235, 226, 50);
                                        border:none;"
                            >
                                Daftar
                            </button>
                            <br>
                            <span>
                                Sudah Punya Akun?<a href="{{ route('login') }}" class="px-1 mt-2"
                                >Masuk</a>
                            </span>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('prepend-script')
<div class="animation-login">
    <div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
      </div>
</div>
@endpush

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    Vue.use(Toasted);

    var register = new Vue({
        el: "#register",
        mounted() {
        AOS.init();
        },
        methods : {
            checkForEmailAvailability : function(){
                var self = this;
                axios.get('{{ route('api-register-check') }}', {
                    params : {
                        email : this.email
                    }
                })
                    .then(function (response) {

                        if(response.data == 'Available'){
                            self.$toasted.show(
                                "Email anda tersedia! Silahkan lanjut langkang selanjutnya",
                                {
                                    position: "top-center",
                                    className: "rounded",
                                    duration: 2000,
                                }
                            );

                            self.email_unavailable = false;

                        } else {
                            self.$toasted.error(
                                "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
                                {
                                    position: "top-center",
                                    className: "rounded",
                                    duration: 2000,
                                }
                            );

                            self.email_unavailable = true;
                        }

                        // handle success
                        console.log(response);
                    })
            }
        },

        data() {
            return {
                name: "",
                email: "",
                is_store_open: false,
                store_name: "",
                email_unavailable : false,
            }
        },
    });
    </script>
@endpush
