@extends('layouts.master')
@section('title', 'Sign Up')
@section('content')
<div class="w-full">
    <section class="h-full gradient-form bg-gray-100 md:h-auto">
        <div class="container py-12 px-6 h-full">
          <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="xl:w-6/12">
              <div class="block bg-white shadow-lg rounded-lg">
                <div class="lg:flex lg:flex-wrap g-0">
                  <div class="lg:w-full px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                      <div class="text-center">
                        <img
                          class="mx-auto w-24 h-24"
                          src="/logo.png"
                          alt="logo"
                        />
                        <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Join Devhaus Team now</h4>
                      </div>
                      <form>
                        <p class="mb-4">Create an account with us</p>
                        <div class="mb-4">
                          <input
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                            placeholder="Username"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="email"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                            placeholder="Email"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                            placeholder="Password"
                          />
                        </div>
                        <div class="mb-4">
                          <select
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                          >
                          <option value="Developer">Developer</option>
                          <option value="System Designer">System Designer</option>
                          <option value="UI/UX Designer">UI/UX Designer</option>
                          <option value="System Architect">System Architect</option>
                          </select>
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1">
                          <button
                            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            type="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            style="
                              background: linear-gradient(
                                to right,
                                #ee7724,
                                #d8363a,
                                #dd3675,
                                #b44593
                              );
                            "
                          >
                            Create Account
                          </button>
                          <a class="text-gray-500" href="#!">Forgot password?</a>
                        </div>
                        <div class="flex items-center justify-between pb-6">
                          <p class="mb-0 mr-2">Have an account yet? <a href="/"><span class="text-[#d8363a]">Sign In</span></a></p>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection