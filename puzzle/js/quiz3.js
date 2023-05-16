//let input = document.querySelector('input');
let inputVal = document.getElementById("inp").value;
let btn = document.querySelector('button');

let correct = 0, total = 0;
let accuracy = 0.0;

btn.onclick = function () {
    var ok = false;
    let res = 'fifth';
   // let answerString = input.value.toString().toLowerCase().trim();
    alert('Word: ' + inputVal);
    total++;
    /*if (inputVal.length == 0) {
        alert('Invalid input');
    }
    else if (inputVal === res) {
        ok = true;
        correct++;
    } else {
        
        alert('Oops! wrong answer');
    }*/
    
    accuracy = (correct / total) * 100;
    //uploadData(accuracy, ok);
};
