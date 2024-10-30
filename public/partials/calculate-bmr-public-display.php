<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://wpcodecrafter.com/
 * @since      1.0.0
 *
 * @package    Calculate_Bmr
 * @subpackage Calculate_Bmr/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="bmr-main-bg">
    <div class="bmr-card">
       <div class="bmr-top">
           <h2><a href="https://www.calculator.io/bmr-calculator/" target="_blank">Calculate BMR</a></h2>
       </div>
        <div class="bmr-fields ">
            <input type="number" id="bmr-height" placeholder="Height in cm" >
        </div>

        <div class="bmr-fields ">
            <input type="number" id="bmr-weight" placeholder="Weight in kg" >
        </div>

        <div class="bmr-fields ">
            <input type="number" id="bmr-age" placeholder="Age" >
        </div>

        <div class="bmr-fields ">
            <span for="gender" id="bmr-gender">Gender:</span>
            <span>Male</span>
            <input type="radio" id="bmr-male" name="gender" value="male" checked>
            <span>Female</span>
            <input type="radio" id="bmr-female" name="gender" value="female">
        </div>

        <div class="bmr-fields ">
            <input type="text" id="bmr-value" placeholder="Result..." >
        </div>

        <div class="bmr-fields ">
                <button type="submit" id="" class="btn-submit" onclick="getbmrvalue()">Calculate BMR</button>
        </div>
    </div>
</div>