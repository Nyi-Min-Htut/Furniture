<template>
    <div class="w-10/12 mx-auto">
        <div>
            <img src="../../img/iconoir_sofa.png" class="w-12" alt="">
        </div>

        <div class="grid md:grid-cols-2">
            <div class=" md:ml-12 flex justify-center items-center h-full">
                <div class=" w-full">
                    <h1 class="md:text-left text-center  text-xl md:text-3xl brand_font_color mb-3">Login</h1>
                    <p class="md:w-3/4 my-4 md:text-lg text-md text-gray-500 text-center md:text-left">lorem ipsum dollar sit amat lsdjl dlksal fjvowmb lwjo hfew aljfaskldjfasd  ljldsakjfad</p>

                    <form>
                        <div>
                            <input type="text" class="w-full md:w-3/5 mb-5 focus:outline-none p-2 border rounded-md border-gray-300 focus:border-green-500 focus:border-3" placeholder="Phone">
                        </div>

                        <div>
                            <input type="text" class="w-full md:w-3/5 mb-5 focus:outline-none p-2 border rounded-md border-gray-300 focus:border-green-500 focus:border-3" placeholder="Phone">
                        </div>

                        <div>
                           <p class="my-3 text-md md:text-lg">If you don't have account, Please <span @click="registerPage" class=" text-red-500 cursor-pointer">register</span> </p>
                        </div>

                        <div>
                            <button class="w-full md:w-3/5 my-5 hover:bg-green-600 rounded-md bg-green-500 text-white p-2 "> Confirm</button>
                        </div>
                    </form>
                </div>
            </div>

          

            <div class="flex justify-center items-center h-full">
                <img src="../../img/Rectangle 84.png" class="h-5/6 w-3/4" alt="">
            </div>
        </div>

  
    </div>
</template>

<script>
export default {

    methods:{
        registerPage(){
        window.location.href='/register'
        }
    }

}
</script>

<style>

</style>