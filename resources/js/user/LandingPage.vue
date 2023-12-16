<template>



<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl brand_font_color"
          id="exampleModalLabel">
          Sign in
        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        <form action="" class="  bg-white" >
                    <h1 class=" text-2xl md:text-4xl brand_font_color text-center mt-5 mb-12">Say Somethings</h1>
                    
                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <textarea type="email" placeholder="Email or Phone" class=" w-4/5 h-32  p-2 rounded-md custom_input_shadow custom_border"></textarea>
                    </div>

                    <div class="flex justify-center mb-5">
                        <button class="w-4/5 p-2 brand_background_color text-white rounded-md hover:bg-green-600 transition-all duration-300">Confirm</button>
                    </div>


                </form>
      </div>

      <!--Modal footer-->
     
    </div>
  </div>
</div>

<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="Signin"
  tabindex="-1"
  aria-labelledby="SigninLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl brand_font_color"
          id="SigninLabel">

        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        <form action="" class="  bg-white" >
                    <h1 class=" text-2xl md:text-4xl brand_font_color text-center mt-5 mb-12">Sign in</h1>

                    <div class="flex justify-center">
                        <p class="my-4">if you don't have account please <span class="text-red-500" >
                            <button
                            class="text-red-500 font-bold"
                            data-te-toggle="modal"
                            data-te-target="#Register"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            >
                                Register
                            </button>
                        </span></p>
                    </div>
                    
                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <textarea type="email" placeholder="Email or Phone" class=" w-4/5 h-32  p-2 rounded-md custom_input_shadow custom_border"></textarea>
                    </div>

                    <div class="flex justify-center mb-5">
                        <button class="w-4/5 p-2 brand_background_color text-white rounded-md hover:bg-green-600 transition-all duration-300">Confirm</button>
                    </div>


                </form>
      </div>

      <!--Modal footer-->
     
    </div>
  </div>
</div>

<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="Register"
  tabindex="-1"
  aria-labelledby="RegisterLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl brand_font_color"
          id="RegisterLabel">

        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          
          aria-label="Close" >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        <form action="" class="  bg-white" >
                    <h1 class=" text-2xl md:text-4xl brand_font_color text-center mt-5 mb-12">Register</h1>

                    <div class="flex justify-center">
                        <p class="my-4">if you have account please <span class="text-red-500" >Sign in</span></p>
                    </div>
                    
                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <textarea type="email" placeholder="Email or Phone" class=" w-4/5 h-32  p-2 rounded-md custom_input_shadow custom_border"></textarea>
                    </div>

                    <div class="flex justify-center mb-5">
                        <button class="w-4/5 p-2 brand_background_color text-white rounded-md hover:bg-green-600 transition-all duration-300">Confirm</button>
                    </div>


                </form>
      </div>

      <!--Modal footer-->
     
    </div>
  </div>
</div>

    <div class=" mx-auto w-10/12 ">

        <!-- Nav Bar -->
        <div class="mt-3 mb-4 flex sm:flex md:flex  justify-between  " >
            <div  v-if="mobile_nav" class="w-full ">
                <div class="flex justify-between">
                    <div>
                        <img src="../../img/iconoir_sofa.png" class="w-9" alt="">
                    </div>
                    <div>
                        <i class="fa-solid fa-xmark" @click="menuBar()"></i>
                    </div>

                </div>
               
               <div class="w-full p-4 text-center hover:bg-gray-200 cursor-pointer" >
                <a href="#landing" @click="menuBar()">Home</a>
               </div>
               <div class="w-full p-4  text-center hover:bg-gray-200 cursor-pointer">
                <a href="#about" @click="menuBar()">About</a>
               </div>
               <div class="w-full p-4  text-center hover:bg-gray-200 cursor-pointer">
                <a href="#service" @click="menuBar()">Service</a>
               </div>
                <div class="w-full p-4  text-center hover:bg-gray-200 cursor-pointer">
                    <a href="#service" @click="menuBar()">Contact </a>
                </div>
                <div class="w-full p-4  text-center hover:bg-gray-200 cursor-pointer">
                    <button
                        class="brand_font_color text-xl font-bold"
                        data-te-toggle="modal"
                        data-te-target="#Signin"
                        data-te-ripple-init
                        data-te-ripple-color="light ">
                    Sign in
                    </button>
                </div>

            </div>
            
            <div class="w-full" v-if="web_nav">
                    <img src="../../img/iconoir_sofa.png" class="w-10" alt="">
            </div>

            <div v-if="web_nav" class="cursor-pointer font-bold w-full flex justify-between md:flex hidden">
                <div>
                    <a href="#landing">Home</a>
                </div>
                <div>
                    <a href="#about">About</a>
                </div>
                <div>
                    <a href="#service">Service</a>
                </div>
                <div>
                    <a href="#contactUs">Contact us</a>
                </div>
                <div>
               
                    <button
                        type="button"
                        class="px-3 p-2 brand_font_color font-bold hover:shadow-lg rounded-md bg-gray-50 hover:bg-white transition-all duration-300"
                        data-te-toggle="modal"
                        data-te-target="#Signin"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Sign in
                    </button>
                </div>
            </div>



            <div v-if="web_nav" class=" md:hidden">
               
                    <i class="fa-solid fa-bars" @click="menuBar()"></i>
               
                
            </div>


        </div>


        <div class="sectionCutter_sm"></div>

        <!-- landing section -->
        <div  class="block lg:flex justify-around" id="landing">
            <div class="w-full  flex justify-center items-center mb-20">
               <div class="block ">
                <h1 class="text-lg brand_font_color">The best choice for you</h1>
                <h1 class="text-4xl md:text-6xl mt-3 md:mt-5">Choose the Best</h1>
                <h1 class="text-4xl md:text-6xl mt-3 md:mt-5">Modern <span class="brand_font_color">Furniture</span></h1>
                <h1 class="text-4xl md:text-6xl mt-3 md:mt-5">For Better Living</h1>
               </div>

            </div>
            <div class="w-full flex justify-center">
                <div>
                    <img src="../../img/kam-idris-_HqHX3LBN18-unsplash 1.png" class="w-52 md:w-80 "  alt="">
                </div>
            </div>
        </div>

        <div class="h-12 md:h-48"></div>

        <!-- About us -->
        <div class=" block lg:flex justify-between" id="about">
            <div class="flex justify-center items-center w-full hidden lg:flex">
                <div>
                    <img class="w-80" src="../../img/Rectangle 3.png"  alt="">
                </div>
            </div>

            <div class="w-full ">
                <div class="text-center text-2xl md:text-4xl brand_font_color ">About Us</div>
                <div class="flex justify-center mt-16">
                    <p class=" text-lg text-center w-full md:w-4/5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, id officiis. Facere libero debitis incidunt qui cum totam illum ducimus! Aspernatur cum ipsam delectus voluptatem iusto distinctio fugit corrupti officia veritatis eos maxime molestias provident inventore omnis dolor perspiciatis rem placeat, expedita, esse harum obcaecati suscipit culpa! Enim, mollitia labore!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, excepturi aut vitae autem unde mollitia! Obcaecati expedita rerum repellat maxime perferendis facere consectetur. Autem provident, culpa distinctio quos itaque consequuntur.
                    </p>
                </div>
            </div>

            <div class="flex justify-center items-center w-full lg:hidden mt-12">
                <div>
                    <img class="w-64" src="../../img/Rectangle 3.png"   alt="">
                </div>
            </div>
        </div>

        <div class=" h-12 md:h-48"></div>

        <!-- services -->
        <div id="service">
            <div class="text-center brand_font_color text-2xl md:text-4xl">
                Service
            </div>
            <p class="text-center text-xl mt-10">Enjoy our best service with your exploring through furniture store</p>

            <div class="flex md:hidden justify-around mt-16">
                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/Vector.png" class="w-9" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>

                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/mdi_discount-outline.png" class="w-9" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex md:hidden justify-around mt-16">
                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/streamline_interface-award-trophy-reward-rating-trophy-social-award-media.png" class="w-9" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>

                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/iconamoon_delivery-light.png" class="w-9" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>
            </div>

            <div class="hidden md:flex justify-between mt-16 ">
                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/Vector.png" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>

                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/iconamoon_delivery-light.png" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>

                <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/mdi_discount-outline.png" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>

                 <div class="text-center mb-12">
                    <div class="flex justify-center mb-5">
                        <img src="../../img/streamline_interface-award-trophy-reward-rating-trophy-social-award-media.png" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="w-40">
                            free consulting 24/7 for your furniture 
                        </p>
                    </div>
                </div>
             

            </div>
        </div>

        <div class="sectionCutter_sm"></div>
        <!-- Contact us -->
        <div class="block md:flex justify-between" id="contactUs">
            <div class="w-full">
                <div class="brand_font_color text-2xl md:text-4xl text-center font-bold-sm">GET IN TOUCH</div>
                <p class="text-sm md:text-lg mt-12">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, obcaecati tempora voluptate reiciendis ea asperiores aliquam assumenda molestiae, distinctio iure dicta! Suscipit architecto quo soluta, illum rerum deleniti, ullam exercitationem quia sit veritatis ut itaque cum temporibus! Dolores, amet tenetur molestiae pariatur eveniet accusantium eos omnis, nam veniam ipsa iusto!
                </p>

                <div class="mt-12">

                    <div class="flex gap-12 mb-6">
                        <img src="../../img/mdi_email-outline.png" class="w-10" alt="">
                        <span>09443250159</span>
                    </div>

                    <div class="flex gap-12 mb-6">
                        <img src="../../img/bi_phone.png" class="w-" alt="">
                        <span>nyiminhtut2003@gmail.com</span>
                    </div>

                    <div class="flex gap-12 mb-6">
                        <img src="../../img/tdesign_location.png" class="w-9" alt="">
                        <span>No 28, South Race Course St, Tamwe</span>
                    </div>

                   
                </div>


            </div>

             <div class="w-full mt-16 flex justify-center">

                <form action="" class=" w-full md:w-3/4 h-full bg-white custom_shadow custom_border" >
                    <h1 class=" text-2xl md:text-4xl brand_font_color text-center mt-5 mb-12">Say Somethings</h1>
                    
                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <input type="email" placeholder="Email or Phone" class=" w-4/5 h-10  p-2 rounded-md custom_input_shadow custom_border">
                    </div>

                    <div class="flex justify-center mb-5">
                        <textarea type="email" placeholder="Email or Phone" class=" w-4/5 h-32  p-2 rounded-md custom_input_shadow custom_border"></textarea>
                    </div>

                    <div class="flex justify-center mb-5">
                        <button class="w-4/5 p-2 brand_background_color text-white rounded-md hover:bg-green-600 transition-all duration-300">Confirm</button>
                    </div>


                </form>
            </div>
        </div>

        <div class="sectionCutter_md"></div>

    </div>
 
</template>

<script>
    import {
    Modal,
    Ripple,
    initTE,
    } from "tw-elements";
    export default {
        data() {
        return {
        mobile_nav: false,
        web_nav:true
        };
        },
        methods:{
            menuBar(){
                console.log('work');
                this.mobile_nav =!this.mobile_nav;
                this.web_nav = !this.web_nav;
            }
        },
        mounted(){
            initTE({ Modal, Ripple });
        }
    }
</script>

<style>
.sectionCutter_sm{
    width:100%;
    height:100px;
}
.sectionCutter_md{
    width:100%;
    height:200px;
}

.customWidth{
    width:80%;
}

.line_height{
    line-height:35px;
}

.custom_shadow{
    box-shadow: 3px 5px 2px 2px rgba(0, 0, 0, 0.119);
}

.custom_input_shadow{
    box-shadow:3px 5px 0px 0px rgba(99, 99, 99, 0.137);
    transition:1s;
}
.custom_input_shadow:hover{
    box-shadow:5px 5px 1px 1px rgba(142, 142, 142, 0.34);
}

.custom_border{
    border:0.5px solid rgba(158, 158, 158, 0.155)
}
</style>