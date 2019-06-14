function BMIcaculate() {
  weight = document.getElementById("weight").value;
  height = document.getElementById("height").value / 100;
  var BMI = (weight) / (height * height);

  var message;
    message = document.getElementById("yourCondition");
    message.innerHTML = "";

  try {
    if(isNaN(BMI)) throw "not a number";
    BMI = Number(BMI);
    if(BMI < 18.5) throw "underweight";
    if(BMI < 23) throw "normal";
    if(BMI < 25) throw "overweight";
    if(BMI < 30) throw "obesity";
    if(BMI > 30) throw "very overweight";
  }
  catch(err) {
    message.innerHTML = "" + err;
  }

  document.getElementById("yourBMI").innerHTML = Math.round(BMI);
}
