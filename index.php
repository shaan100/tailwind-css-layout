<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tailwind layout</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
		 <div class="grid md:grid-cols-12">
		<div class="col-span-2">
		 	   <div class="bg-gray-200 h-screen fixed -left-[500px] md:left-0 flex flex-col items-center sidebar transition-all delay-200 duration-200 overflow-y-auto" style="width: 276px;">
		 	   	        <div class=" mt-24">
		 	   	        	<div class="flex justify-center mb-16">
		 	   	        		<div class="bg-gradient-to-tl to-yellow-500 from-rose-500 rounded-full p-1">
		 	   	        		 <img src="https://source.unsplash.com/random" class="w-24 h-24 rounded-full">
		 	   	        		</div>
		 	   	        	</div>
		 	   	        	  <ul class="capitalize text-2xl space-y-10 ">
		 	   	        	  	  <li class="hover:bg-gray-200 rounded-xl">
		 	   	        	  	  	  <a href="#"><i class="mx-6 fa-solid fa-house-user"></i> home</a>
		 	   	        	  	  </li>
		 	   	        	  	  <li>
		 	   	        	  	  	  <a href="#"><i class="fa-brands fa-product-hunt mx-6"></i> product</a>
		 	   	        	  	  </li>
		 	   	        	  	  <li>
		 	   	        	  	  	  <a href="#"><i class="mx-6 fa-solid fa-store"></i> store</a>
		 	   	        	  	  </li>
		 	   	        	  	  <li>
		 	   	        	  	  	  <a href="#"><i class="fa-solid fa-users mx-6"></i> members</a>
		 	   	        	  	  </li>
		 	   	        	  	  <li>
		 	   	        	  	  	  <a href="#"><i class="fa-sharp fa-solid fa-circle-chevron-down mx-6"></i> more</a>
		 	   	        	  	  </li>

		 	   	        	  </ul>
		 	   	        </div>
		 	   </div>
			</div>
		 	
		 	<div class="col-span-10 px-6">
		 	   	      <div class="fixed md:hidden">
		 	   	      	   <button class="text-3xl" id="handburg">
		 	   	      	   	    <i class="fa-sharp fa-solid fa-bars"></i>
		 	   	      	   </button>
		 	   	      </div>
		 	   	      <div class="grid grid-cols-1 md:grid-cols-2 text-justify gap-6 my-6 shadow p-5">
		 	   	      	   <div>
		 	   	      	   	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	   	      	   	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	   	      	   	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	   	      	   	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	   	      	   	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	   	      	   	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		 	   	      	   </div>
		 	   	      	   <p>
		 	   	      	   	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	   	      	   	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	   	      	   	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	   	      	   	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	   	      	   	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	   	      	   	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		 	   	      	   </p>
		 	   	      </div>

		 	   	      <?php for($x=1;$x<100;$x++):?>
                      		 
                      		 <div class="bg-yellow-500 ">
                      		 	    <p class="p-6">
                      		 	    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		 	    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		 	    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      		 	    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      		 	    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      		 	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      		 	    </p>
                      		 </div>

		 	   	      <?php endfor;?>
		 	   </div>
		 </div>


		 <script type="text/javascript">
		 	
		 	      var handburg = document.querySelector('#handburg');
		 	      var sidebar  = document.querySelector('.sidebar');

		 	      handburg.addEventListener('click',function(){
                          
                           if(sidebar.classList.contains('-left-[500px]')){
 									sidebar.classList.remove('-left-[500px]')
 									sidebar.classList.add('left-0');
                           }else{
                             sidebar.classList.add('-left-[500px]');
                             console.log(1)
                             sidebar.classList.remove('left-0');
                           }
                           


		 	      })

		 </script>
</body>
</html>