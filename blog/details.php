<?php 
    session_start();
    include '../components/header.php';
    include '../components/navigation.php';
    include '../account/auth/dbConfig.php';
?>
<!-- Blog component -->
<section class="bg-white dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('<?= ROOT_DIR ?>assets/images/mary_poppins.jpg'); background-position: center;">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Mary Poppins
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">Saturday 1st February, 2023</p>
                <hr>
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div>    
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div> 
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!-- Comments component -->
<div class="p-8">
    <div class="bg-white p-4 rounded-lg shadow-xl py-8 mt-12">
        <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">Comments</h4>
        <p class="text-center text-gray-600 text-sm mt-2">Sign in to leave a comment</p>
        <div class="space-y-12 px-2 xl:px-16 mt-12">
            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Lorem ipsum dolor sit amet?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>

            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Consectetur adipisicing elit?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>

            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Neque eos, dignissimos provident reiciendis debitis?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>

            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Repudiandae commodi perferendis et itaque?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>

            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Similique fugiat cumque?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>

            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Impedit iusto vitae dolorum, nostrum fugit?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include '../components/footer.php';
?>