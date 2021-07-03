<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>GIET UNIVERSITY</title>
</head>

<body>
  <header class="text-gray-500 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <svg src="https://www.workforcesoftware.com/wp-content/uploads/WorkForce-Software-Making-Work-Easy.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
          <!-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> -->

          <span class="ml-3 text-xl">Attendance Puller</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-white" href="info.php">Info</a>
        <?php
        include('server.php');
        if (isset($_GET['id'])) {
          $db = mysqli_connect('localhost', 'root', '', 'registration');
          $query = "UPDATE `user` SET `exam`=0 WHERE  `username`='{$_SESSION['username']}' ; ";
          //     echo $query;
          $result = mysqli_query($db, $query);
        }
        if (isset($_SESSION['username'])) {
          $query = "SELECT * from `user` WHERE `exam`=0  and `username`='{$_SESSION['username']}' ; ";
          //  echo $query;
          $result = mysqli_query($db, $query);
          if (mysqli_num_rows($result) > 0) {
            echo "<a class='mr-5 hover:text-white' href='result.php'>Result</a>";
          } else {
            echo "<a class='mr-5 hover:text-white' href='exam.php'>Exam</a>";
          }
        }
        ?>
        <?php
        if (!isset($_SESSION['success']))
          echo '<a class="mr-5 hover:text-white" href="login.php">Login</a>';
        else
          echo '<a class="mr-5 hover:text-white" href="server.php?logout="1"">Logout</a>'; ?>
      </nav>
      <a href="table.php">
        <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Face_Detector
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
      </a>
    </div>
    <style>
      * {
        position: relative;
      }
    </style>
  </header>
  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center" >
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white" data-0-top="opacity : 0;right:100px;" data-200-top="opacity : 1;right:0px;">ABOUT GIETU
          <h6 data-0-top="opacity : 0;right:100px;" data-200-top="opacity : 1;right:0px;"><br class="hidden lg:inline-block" >"Education is the only mean to emphasis."</h6>
        </h1>
        <p class="mb-8 leading-relaxed" data-0-top="opacity : 0;right:100px;" data-200-top="opacity : 1;right:0px;">GIET, best University in Eastern India for campus placement. GIET University, Gunupur (formerly known as Gandhi Institute of Engineering and Technology) was established by “Vidya Bharati Educational Trust,” Gunupur, Odisha, India in the year 1997. Since inception, the Trust promotes Technical Education in India with a motto of providing Quality Education in a highly disciplined and conducive environment with International Standards.</p>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" data-0-top="opacity : 0;left:100px;" data-200-top="opacity : 1;left:0px;">
        <img class="object-cover object-center rounded" alt="hero" src="csedep.jpg">
      </div>
    </div>
  </section>
  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20" >
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">Face Detection Attendance System</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;"> Attendance is a compulsory requirement of every organization.</p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">Introduction</h2>
            <p class="leading-relaxed text-base"> Maintaining attendance register daily is a difficult and time consuming task. There are many automated methods for the same available like Biometric, RFID, eye detection, voice recognition, and many more. This paper provides an efficient and smart method for marking attendance. As it is known that primary identification for any human is its face, face recognition provides an accurate system which overcomes the ambiguities like fake attendance, high cost, and time consumption. This system uses face recognizer library for facial recognition and storing attendance. The absentee's supervisor or parents are informed through daily message basis regarding the absence of their employees or wards respectively. The objective of this project is to innovate existing projects with some added feature like large data.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">The Catalyzer</h2>
            <p class="leading-relaxed text-base">There are various face detection algorithms like HOG( Histogram of Oriented Gradients), Convolutional Neural Network. Both detect the face. The only difference is their accuracy. Deep Learning ( Convolutional Neural Network) method is more accurate than the HOG. But it requires more computational power like High GPU, CPU e.t.c as compared to HOG. That’ why HOG is widely used on Mobile Platforms.
              I am not going in deep to tell you how the HOG method detects the image. Here you will know how to apply it. If you want to learn in details then you can take this course.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:400px;">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">Implementation</h2>
            <p class="leading-relaxed text-base">Face Detection is the ability to locate the faces in a photograph. You create a two steps pipeline for face detection.There are various face detection algorithms like HOG( Histogram of Oriented Gradients), Convolutional Neural Network. Both detect the face. The only difference is their accuracy.HOG only considers the changes between the light and dark areas in the image. It ignores the color information. That’s why it converts colored image into the black and white image.It repeats the process for the entire pixels of a black and white image and draws the gradient image of it.The first stage is to collect the HOG represented images.Sliding Window Classifier works on it. It slides on the entire image until it returns true and detects the position of the image.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">

            </a>
          </div>
        </div>
      </div>
  </section>
  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-white tracking-widest"  data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;">Doing things are great but first we have to initiate it in a proper way because unless we fail we can't reach to success.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/2" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="bh1.jpeg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-white">Bhagbat Prasad Mishra</h2>
              <h3 class="text-gray-600 mb-3">UI Developer</h3>
              <p class="mb-4">Creativity is the skill which occur by practice not by birth.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="sar.jpeg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-white">Sarbajit Jena</h2>
              <h3 class="text-gray-600 mb-3">Algorithm Designer</h3>
              <p class="mb-4">Implementation is good but initiate is great.</p>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="srp.jpeg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-white">Soumya Ranjan Pasayat</h2>
              <h3 class="text-gray-600 mb-3">Web Developer</h3>
              <p class="mb-4">Do work with love people do love you from your work.</p>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="jash.jpeg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-white">Jashwant Pradhan</h2>
              <h3 class="text-gray-600 mb-3">Web Developer</h3>
              <p class="mb-4">Self learning is the best skills to enhance yourself.</p>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
  </section>
  <section class="text-gray-500 body-font bg-gray-900">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">Face is the new ID</h1>
        <p class="lg:w-1/2 w-full leading-relaxed text-base" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;">Now access any of your office location globally with just a smile. Say cheese to GIETU!
          Time & Attendance Simplified!</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;">
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">ACCURACY</h2>
            <p class="leading-relaxed text-base">Automatically scans multiple employees, with 99.8% accuracy in face detection. Faces once recognised are accurately enrolled into the payroll system.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;" >
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">TIME-SAVING</h2>
            <p class="leading-relaxed text-base">It takes barely 3 seconds to recognize your face and create attendance journal in the payroll system, saving precious man-hours.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">OPTIMIZE RESOURCE</h2>
            <p class="leading-relaxed text-base">This real-time monitoring helps to optimize workforce and other resources.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;">
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">INCREASED PRODUCTIVITY</h2>
            <p class="leading-relaxed text-base">Saving time will lead to an increase in productivity, resulting in reduction of cost (optimal utilization of resources) and an increase in revenue.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">HYGIENIC</h2>
            <p class="leading-relaxed text-base">The system ensures that there are no concerns regarding hygiene and cleanliness unlike biometric systems which has devices requiring physical contact.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
          <div class="border border-gray-800 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <h2 class="text-lg text-white font-medium title-font mb-2">LIVENESS DETECTION</h2>
            <p class="leading-relaxed text-base">Ensures no one uses a photograph or a video to feign attendance, preventing fraud attendance entries.</p>
          </div>
        </div>

  </section>
  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-2 sm:w-1/2 w-1/2" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:500px;">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
            <?php
            $query = "SELECT * FROM `user`";
            //     echo $query;
            $result = mysqli_query($db, $query);
            echo mysqli_num_rows($result);
            ?>
          </h2>
          <p class="leading-relaxed">Users</p>
        </div>

        <div class="p-2 sm:w-1/2 w-1/2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">7</h2>
          <p class="leading-relaxed">Present</p>
        </div>
      </div>
    </div>
  </section>
  <script src="js/skrollr.js"></script>
  <script type="text/javascript">
    var s = skrollr.init();
  </script>
</body>
<footer class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left" data-center-center="top:0;" data-0-bottom="top:100px;">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24"> -->
        <!-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
        <span class="ml-3 text-xl">Attendance_Puller</span>
      </a>
      <p class="mt-2 text-sm text-gray-700">Time is precious so make it easy by visualizing to the great extent</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4" data-center-center="top:0;" data-0-bottom="top:150px;">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CONTACT US</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white">GIET UNIVERSITY</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Gunupur</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Mobile No:8984856890></a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Email:Info@giet.edu.in</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4" data-center-center="top:0;" data-0-bottom="top:200px;">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SERVICES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white">Transport</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Banking Services</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Food Facility</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Library anytime 24x7</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4" data-center-center="top:0;" data-0-bottom="top:250px;">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">ACADEMIC INFO</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white">Apply For Admission</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">B.Tech Programmes</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">PG Programmes</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Time Table</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">IMPORTANT INFO</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white">Sports</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Department</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Syllabus</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white">Hostel</a>
          </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-800">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-600 text-sm text-center sm:text-left">©Team
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-500 ml-1" target="_blank">@GIETU</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-600">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-600">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-600">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-600">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>

</html>