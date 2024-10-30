<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="bmi-main-bg">
    <div class="bmi-card">            
        <div class="bmi-circle flex">
            <p class="bmi-title"><a href="https://www.calculator.io/bmi-calculator/" target="_blank">Calculate BMI</a></p>
            <h1 class="bmi-value"> BMI  </h1>
            <h3 class="bmi-data"> Normal </h3>
        </div>
        
        <div class="bmi-input-body">
            <div class="bmi-fields ">
                <input type="number" id="bmi-weight" />
                <span> Kg</span>
            </div>

            <div class="bmi-fields ">
                <input type="number" id="bmi-height" >
                <span> Cm </span>
            </div>
        </div>                        
        <button class="calc-value" onclick="getbmivalue()">Calculate</button>
    </div>
</div>