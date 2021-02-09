<?php
include("core/api/core.php");

echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">\n";
echo "    <title>Refresh!</title>\n";
echo "    <meta name=\"twitter:description\" content=\"Maybe nothing? maybe a game, you decide!\">\n";
echo "    <meta name=\"twitter:image\" content=\"/assets/img/REFRESH.png\">\n";
echo "    <meta name=\"description\" content=\"Maybe nothing? maybe a game, you decide!\">\n";
echo "    <meta property=\"og:image\" content=\"/assets/img/REFRESH.png\">\n";
echo "    <meta name=\"twitter:title\" content=\"Refresh!\">\n";
echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\" href=\"/assets/img/REFRESH.png\">\n";
echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\" href=\"/assets/img/REFRESH.png\">\n";
echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\" href=\"/assets/img/REFRESH.png\">\n";
echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\" href=\"/assets/img/REFRESH.png\">\n";
echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\" href=\"/assets/img/REFRESH.png\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/darkly/bootstrap.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&amp;display=swap\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/styles.min.css\">\n";
echo "</head>\n";
echo "\n";
echo "<body>\n";
echo "    <!-- Start: Highlight Clean -->\n";
echo "    <div class=\"highlight-clean\" style=\"margin-top: 300px;background: transparent;border-style: solid;border-color: rgb(112,0,255);\">\n";
echo "        <div class=\"container\">\n";
echo "            <!-- Start: Intro -->\n";
echo "            <div class=\"intro\">\n";
echo "                <h2 class=\"text-center\" style=\"color: rgb(104,3,232);\"><span style=\"text-decoration: underline;\">Refresh</span>!</h2>\n";
echo "                <p class=\"text-center\" style=\"color: rgb(198,198,198);margin-top: -29px;\">Below is the # of views this page has encountered, including refreshes! that is why its named refresh!</p>\n";
echo "            </div>\n";
echo "            <!-- End: Intro -->\n";
echo "            <h1 style=\"text-align: center;color: rgb(220,6,255);margin-top: -19px;\">".$count."</h1>\n";
echo "            <!-- Start: Buttons -->\n";
echo "            <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" style=\"background: rgb(112,0,255);border: 2px solid rgb(104,3,232);border-radius: 30px;\" onclick=\"location.reload()\">Refresh</a></div>\n";
echo "                <p class=\"text-center\" style=\"color: rgb(198,198,198);margin-top: 9px;\">Please do not cheat (using an autoclicker of some sorts, the count will sometimes crash and reset as a punishment!</p>\n";
echo "            <!-- End: Buttons -->\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <!-- End: Highlight Clean -->\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>\n";
echo "</body>\n";
echo "\n";
echo "</html>";
?>