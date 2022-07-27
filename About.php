<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About | ISS</title>
    <link rel="shortcut icon" href="logo.png" type="x-icon">
</head>
<body>
<?php
session_start();
if (empty($_SESSION['User'])){
    include('navigation.php');
}
else {
    include('navigationLogOut.php');
}
?>

    <div class="rows-1" style="padding-left: 5%; padding-right: 5%;">
        <div class="col-xs-6 col-md-3">
            <h4 align="center">OUR COMMUNITY AND CULTURE</h4>
            <p>
                Our school is at the heart of the village, It is safe and welcoming.
                The school has a caring and supportive atmosphere and upholds our traditional values.
                We celebrate diversity and encourage children to respect and embrace differences.
                The school promotes children’s active role in the community and in respecting their
                environment. We work collaboratively with other schools and explore opportunities to
                develop new partnerships to enhance teaching and learning. Our standards are excellent
                with all pupils achieving their potential. We are an exclusive school.
            </p>
        </div>
        <div class="col-xs-6">
            <h4 align="center">ABOUT OUR SCHOOL</h4>
            <p>Imperial Secondary School (ISS), is a Co-educational full boarding school with a spirit,
                where everyday activities are dynamic and engaging, where ordinary people do unexpected
                and exciting things. The school is on a sprawling 37 acres campus located on
                Plot No. 1, Block “ C “ Msolwa – Chalinze, along Dar es Salaam – Morogoro road with
                all State-of-the Art infrastructure. The school offers NECTA curricula as a preparation
                for Secondary education from Form 1 to Form 6.
            </p>
        </div>
        <div class="col-md-3">
            <h4 align="center">THE STUDENTS</h4>
            <p>Our students are happy and well behaved, They have high aspirations,
                work hard and achieve to the highest of their abilities. They are able
                to work independently as well as co-operatively with others and develop
                valuable skills that prepare them for the future. Excellence and success are
                encouraged and celebrated. Students respect and like their teachers.
                They are confident, resilient and know what they can do to improve.</p>
        </div>
    </div>

    <div class="rows-2" style="padding-left: 5%; padding-right: 5%;">

        <div class="col-xs-6 col-md-3">
            <h4 align="center">OUR TEACHERS</h4>
            <p>Our teachers are outstanding. They inspire through exciting and challenging lessons and seek out
                and share good practice. We have a reputation for developing our staff and encouraging them to excel.
                All staff embody the school’s aims and values.
            </p>
        </div>
        <div class="col-xs-6">
            <h4 align="center">OUR MISSION</h4>
            <p>The Imperial Secondary School (ISS) is committed to providing an education of excellence<
                that meets each student’s interests, abilities and needs within a common curricular
                framework and reflects and promotes an understanding of, and appreciation for, diversity
                in our community as an integral part of school life.
            </p>
            <p>
                Imperial Secondary School (ISS) challenges each student to develop intellectual independence,
                creativity and curiosity and a sense of responsibility toward others both within the School
                and in the community at large. Guided by the Imperial plan, the School prepares students for
                a life of leadership, personal full- filament and go forth unafraid.
            </p>
        </div>
        <div class="col-md-3">

            <h4 align="center">OUR PASTORAL TEAM</h4>
            <p>
                Our pastoral team is very caring and affectionate.
                They spend lot of time with the students and ensure that students are comfortable
                at all level. They create an atmosphere where the students feel at home.
            </p>

        </div>

    </div>

    <div class="rows-3" style="padding-left: 5%; padding-right: 5%;">
        <div class="col-xs-6">
            <h4 align="center">OUR PARENTS</h4>
            <p>
                Parents and teachers work together to support and encourage children.
                Parents are actively involved in their children’s education and support the
                school in achieving its aims. They feel welcome in school and know that thei
                r views are valued and listened to.
            </p>
        </div>
        <div class="col-xs-6">

            <h4 align="center">OUR ENVIRONMENT</h4>
            <p>We have eco-friendly buildings and grounds are clean, attractive, safe and
                welcoming to children, parents and visitors. The massive Plantation drive is on
                and the lawns are coming up. They are an integral part of children’s learning.
                We anticipate what will be needed and invest in the buildings and other resources
                including IT to provide the very best learning experience for the children.
                We work to promote sustainability and good environmental practice across the school.
            </p>

        </div>
    </div>

    <div class="col-xs-12" style="padding-top: 5%">
        <img src="ISS/IMPERIAL-BLOG.gif" width="100%" height="133"/>

    </div>
    <script src="JS/Navigation.js"></script>
</body>
</html>