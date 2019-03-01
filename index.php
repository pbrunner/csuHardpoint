<?php
require __DIR__ . '/inc/bootstrap.php';
$pageTitle = 'CSU Hardpoint';
$section = 'Home';
$jsSection = 'Home Page';

include('inc/header.php');

echo '<div class="container"><br/>
    <div id="gameRules" style="color: #C8C372;">
    <h1>Rules of the Game</h1>
    <h2>The rules are quite simple:</h2>
    <ol>
        <li>There are 705 building spread across CSU&apos;s campuses. The goal is to control as many as possible by the end of the semester.</li>
        <li>You permanetly gain control of a building by being the first person to take a dump in that buiulding.</li>
        <li>To verify that you have taken a dump in the building you must take a picture of it and upload it to this site. The photo must be taken with a GPS enabled camera so that location can be verified from the photo&apos;s geo-location.</li>
        <li>If the photo&apos;s geo-location cannot be verified or the photo is successfully disputed by another user the photo will not count and the location will still remain neutral.</li>
        <li>The buildings will be worth varrying amounts of points depending on ease of accessability and distance from the main CSU campus in Fort Collins, CO.</li>
        <li>The user with the most points at the end of the semester wins. (Probably bragging rights unless another prize is introduced)</li>
        <li>Must have a valid Colorado State Unversity email address and must live in or around the CSU main campus to participate.</li>
        <li>If you do not have a Colorado State University Email address, but sill want to particiapte a current user must send you an invite to the email of your choice.</li>
        <li>I as the admin am not responsible for any arrests, legal ramifications, or school admistration problems as a result of playing this game, as Some buildings may requrie some level of trespassing to enter (these will be worth the most points).</li>
        <li>Pound some fiber, drink some coffee, and Enjoy!</li>
    </ol>
    </div>
</div>';