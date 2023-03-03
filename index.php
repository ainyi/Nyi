
<?php
 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html><head><script src='https://cdn.tailwindcss.com/'></script></head><body><div class="bg-gradient-to-r from-black to-blue-900">
	<div class="max-w-7xl mx-auto relative text-gray-700 body-font">
		<div class="container flex flex-col flex-wrap items-center justify-between py-10 mx-auto md:flex-row">
			<a href="index.php" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none hover:text-black secondary_text">ALL  AI  TOOLS  IN  ONE</a>

			<nav class="top-5 left-20 z-0 flex items-center justify-end w-full h-full py-5 -ml-0 space-x-10 text-base md:-ml-5 md:py-0 md:absolute">
				                <a href="index.php" class="relative inline-block  w-auto px-8 py-3 mt-0 hover:bg-red-600 rounded-md  font-medium leading-6 text-gray-50 transition duration-150 ease-out hover:text-gray-900 secondary_text link-editable editable">Home</a>
								<a href="featu.html" class="relative inline-block  w-auto px-8 py-3 mt-0 hover:bg-red-600 rounded-md  font-medium leading-6 text-gray-50 transition duration-150 ease-out hover:text-gray-900 secondary_text link-editable editable">Features</a>
								<a href="about.html" class="relative inline-block  w-auto px-8 py-3 mt-0 hover:bg-red-600 rounded-md  font-medium leading-6 text-gray-50 transition duration-150 ease-out hover:text-gray-900 secondary_text link-editable editable">About Us</a>
								<a href="index.html" class="relative inline-block  w-auto px-8 py-3 mt-0 hover:bg-red-600 rounded-md  font-medium leading-6 text-gray-50 transition duration-150 ease-out hover:text-gray-900 secondary_text link-editable editable">Contact Us</a>

							</nav>
		</div>
	</div>
</div>



<div class="relative w-full bg-gradient-to-r from-gray-800 to-black">
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pb-32 sm:pt-8 md:pt-12">
        <div class="container flex flex-col items-center justify-between h-full max-w-7xl px-10 mx-auto lg:flex-row">
            <div class="z-30 flex flex-col items-center w-full max-w-xl text-left lg:items-start lg:w-1/2 lg:pt-24 lg:text-left">
                <h1 class="relative mb-4 text-5xl font-black leading-tight text-white lg:pr-16 lg:mb-8 primary_text editable" data-content="website-headlines">Get All Your AI Tools in One Place with ALL AI TOOLS IN ONE.</h1>
                <p class="pr-12 mb-8 text-lg text-white lg:pr-20 secondary_text editable" data-content="website-subheadlines">Enjoy all AI tools in one place....</p>
                <a href="featu.html" class="relative self-start inline-block w-auto px-8 py-3 mt-0 text-base text-white bg-red-600 hover:bg-gray-600 rounded-md shadow-xl sm:mt-1 font-semibold lg:mx-0 btn-editable"><span class="editable">Start Here</span></a>
                 </div>
				  <div class="relative flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:pl-10">
                <div class="container relative  left-1 w-full max-w-3xl lg:absolute lg:w-screen">
                    <img src="imgs/art.jpg" class="w-full h-auto mt-20 mb-20 ml-0 shadow-2xl rounded-xl lg:mb-0 lg:h-full xl:-ml-12 img-editable">
                </div></div></div></div></div>
	




	
				
	<div class="bg-gradient-to-r from-black to-blue-900">
	<div class="max-w-7xl mx-auto relative text-gray-700 body-font">
	<div class="container flex flex-col flex-wrap items-center justify-between py-10 mx-auto md:flex-row">
		<marquee class="text-base text-white mb-2 secondary_text editable uppercase" behavior="scroll" direction="left">All AI TOOLS IN ONE is a website that provides all AI tools in one place so that the user can use all tools in one place instead of looking for different websites!</marquee>
	</div></div></div>
	





	
	<div class="bg-black">
    <div class="pt-16 mx-auto max-w-7xl">
        <div class="flex flex-wrap items-start justify-between pb-6">
            <a href="index.php" class="flex order-first font-medium text-gray-900 lg:order-none lg:w-auto title-font">
				<span class="text-xl font-white leading-none text-white select-none logo"> ALL  AI  TOOLS  IN  ONE <span class="text-black">...</span></span>
			</a><br><br><br>
            <div class="grid w-full grid-cols-2 mt-20 sm:grid-cols-4 gap-y-16 lg:gap-x-8 md:w-5/6 md:mt-0 md:pr-6">
                <div class="md:justify-self-end">
                    <h3 class="font-semibold text-white primary_text">Product</h3>
                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a href="featu.html" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Features</span>
                            </a>
                        </li>
						 <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Scholarships</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="md:justify-self-end">
                    <h3 class="font-semibold text-white primary_text">About</h3>
                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Our Story</span>
                            </a>
                        </li>
                        <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Our Team</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="md:justify-self-end">
                    <h3 class="font-semibold text-white primary_text">Resources</h3>
                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Help Center</span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Our Blog</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
                <div class="md:justify-self-end">
                    <h3 class="font-semibold text-white primary_text">Contact</h3>
                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a href="#_" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Advertising</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="mailto:nyinyinaynaing096@gmail.com?subject= ALL  AI  TOOLS  IN  ONE" class="relative inline-block text-white group link-editable hover:text-red-900">
                                <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-red opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                                <span>Email</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-gray">
            <ul class="flex flex-wrap space-x-5 text-xs">
                <li class="mb-6 text-center flex-full text-red-600 lg:flex-none lg:mb-0">© 2022 ALL  AI  TOOLS  IN  ONE</li>
                <li class="ml-6">
                    <a href="#_" class="relative inline-block text-white group hover:text-red link-editable">
                        <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
                        <span>Privacy Policy</span>
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#_" class="relative inline-block text-white group hover:text-red link-editable">
                        <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
                        <span>Disclaimers</span>
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#_" class="relative inline-block text-white group hover:text-red link-editable">
                        <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
                        <span>Terms and Conditions</span>
                    </a>
                </li>
            </ul>

            <ul class="flex items-center mt-10 space-x-5 lg:mt-0">
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100034383574362&mibextid=ZbWKwL" class="text-white hover:text-red-900 link-editable">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/nyinyinaynaing143/" class="text-white hover:text-red-900 link-editable">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-red-900 link-editable">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>	


</body>
</html>

