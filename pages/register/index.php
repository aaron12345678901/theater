<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5" style="background-image: url('<?= ROOT_DIR ?>assets/images/dimension.png')" >
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block w-1/2 bg-red-900  px-20 py-20 shadow-lg backdrop-blur-md max-sm:px-8 " >
               <img src=" <?= ROOT_DIR ?>assets\images\Theater_Masks.png" alt="Logo">
               <h1 class="mb-2 text-2xl font-serif	font-family: Georgia, Cambria, underline">King's Theatre</h1>
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                    <p>Enter your information to register</p>
                </div>
                <form action="account/auth/register.php" method="post">
               
                <div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Username</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input type="text" 
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                placeholder="John"
                                name="username">
                            </div>
                        </div>
            
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input type="email" 
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                placeholder="johnsmith@example.com" 
                                name="email">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="password" name="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-yellow-400 hover:bg-yellow-400 focus:bg-yellow-400 text-white rounded-lg px-3 py-3 font-semibold" type="submit">REGISTER NOW</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>    
    
    
<?php include '../../components/footer.php'; ?>