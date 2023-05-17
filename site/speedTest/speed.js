var text = document.getElementById('text')
var input = document.querySelector('input')
var myInput = document.getElementById('myInput')
var textN = document.getElementById('textNow')
var textA = document.getElementById('textAfter')
var second = document.getElementById('second')
var wpm = document.getElementById('wpm')
var cpm = document.getElementById('cpm')
var acc = document.getElementById('accuracy')
var div = document.querySelectorAll('div')
var button = document.querySelectorAll('tryAgain')
var reboot = document.getElementById('reboot')
var showRes = document.querySelector('.showResult')
var showRec = document.querySelector('.showRecord')
var nowRecord = document.querySelector('.nowRecord')
var word
var some = "sdaadas"
var letter = ''
var count = 0
var letterNum = 0
var wordNum = 0
var rightWord = 0
var wrongWord = 0
var wrongchar = 0
var rightChar = 0
var bFlag = true
var endTimer = false
var text_left = 0
var moved = 0
var accuracy = 0
var time = 60
var record = new Object()
var autoed = false;
function putRec(nowC,nowW,nowA) {
    $(document).ready(function () {
        $.ajax({
            method: "POST",
            url: "record.php",
            data: { cpm: nowC, wpm:nowW, acc:nowA }
        })
        .done(function (msg) {
            message = msg.split(' ')
            console.log(message)
            console.log(localStorage.getItem('cpm'))
            if(message[11] == 11){
                localStorage.setItem('wpm', Number(message[8]))
                localStorage.setItem('cpm', Number(message[9]))
                localStorage.setItem('acc', Number(message[10]))
                localStorage.setItem('user', 1)
            }else if(message[0] == 200){
                localStorage.setItem('wpm', nowW)
                localStorage.setItem('cpm', nowC)
                localStorage.setItem('acc', nowA)
            }
            else{
                if(localStorage.getItem('cpm') > 0){
                    if (localStorage.getItem('cpm') > nowC){
                        localStorage.getItem('wpm')
                        localStorage.getItem('cpm')
                        localStorage.getItem('acc')
                    }else{
                        localStorage.setItem('wpm', nowW)
                        localStorage.setItem('cpm', nowC)
                        localStorage.setItem('acc', nowA)
                    }
                }
                else{
                    localStorage.setItem('wpm', nowW)
                    localStorage.setItem('cpm', nowC)
                    localStorage.setItem('acc', nowA)
                }
            }
        });
    });
}

setTimeout(() => { putRec(rightChar,rightWord,Math.round(accuracy)); }, 1);

var record = {
    wpm: rightWord,
    cpm: rightChar,
    acc: accuracy
}


function move(moveNum) {
    text_left += (17.6 * -moveNum)
    text.style.left = String(text_left) + 'px'
}
function IsWrong(word1, word2) {
    res = true
    if (word1.slice(0, word1.length) != word2.slice(0, word1.length)) {
        return false
    }
    return res
}
function timer(sec) {
    if (sec == 0) {
        endTimer = true
        div[0].classList.add('result')
        if(rightChar > localStorage.getItem('cpm')){
            setTimeout(() => { putRec(rightChar,rightWord,Math.round(accuracy));
            div[0].innerText = "New record :" + rightWord + "wpm " + rightChar + "cpm " + Math.round(accuracy) + "%"; }, 200);
            
        }
        else{
            showRes.innerHTML = "Your result :" + rightWord + "wpm " + rightChar + "cpm " + Math.round(accuracy) + "%"
            // showRec.innerHTML = "Best record :" + localStorage.getItem('wpm') + "wpm " + localStorage.getItem('cpm') + "cpm " + localStorage.getItem('acc') + "%"
            nowRecord.style.zIndex = "10"
        }
        return
    }
    console.log(sec)
    second.innerText = sec
    sec--
    setTimeout(() => { timer(sec); }, 1000);
}
function generationText() {
    $(document).ready(function () {
        $.ajax({
            method: "POST",
            url: "server.php",
            data: { amount_words: 100 }
        })
            .done(function (msg) {
                globalThis.some = msg
            });

    });
}


function Reboot() {
    location.reload();
}
setTimeout(() => { nowRecord.innerHTML = "Best Try: <br/> " + localStorage.getItem('wpm') + "wpm " + localStorage.getItem('cpm') + "cpm " + Math.round(localStorage.getItem('acc')) + "%"; }, 250);
generationText();
word = some
function speed(example) {
    example = some
    text.innerText = example
    var arr = example.split(' ')
    second.innerText = time
    wpm.innerText = '0'
    cpm.innerText = '0'
    acc.innerText = '0'
    input.onkeydown = function (e) {
        if ((e.code.slice(0, -1) == 'Key' || e.key == 'Backspace' || e.key == ' ' || e.code.slice(0, -1) == 'Digit' || e.key == '.' || e.key == ',') && endTimer == false) {
            if (bFlag == true) {
                timer(time)
                bFlag = false
            }
            if (e.key == 'Backspace' && letterNum != 0) {

                if (IsWrong(letter, arr[wordNum])) {
                    move(-1)
                    moved--

                } else if (IsWrong(letter.slice(0, -1), arr[wordNum])) {
                    textN.style.textDecoration = "none"
                    textN.style.color = "rgba(16, 209, 24, 1)"
                }

                letterNum--
                letter = letter.slice(0, letter.length - 1)
            }
            else if ((e.key != 'Backspace' || (input.value.length == 0 && e.key != 'Backspace')) && e.key != ' ') {
                letter += e.key
                if (IsWrong(letter, arr[wordNum])) {
                    move(1)
                    moved++
                    example
                    textN.style.textDecoration = "none"
                    textN.style.color = "rgba(16, 209, 24, 1)"
                }
                else {
                    textN.style.textDecoration = "line-through"
                    textN.style.color = "rgba(165, 9, 35, 9)"
                }
                letterNum++
            }
            if (e.key == ' ' && letterNum != 0) {
                var child = document.createElement('div')
                textA.appendChild(child)
                child.classList.add('child')
                var childs = document.querySelectorAll('.child')
                childs[wordNum].innerText = letter
                rightChar += letter.length
                rightWord++
                if (arr[wordNum] != letter) {
                    child.classList.add('child_wrong')
                    rightChar -= letter.length
                    rightWord--
                    wrongWord++
                }
                // console.log(wrongLetter)
                // console.log(wrongWord)
                move(arr[wordNum].length + 1 - moved)
                moved = 0
                wordNum++
                letterNum = 0
                letter = ''
                input.value = ''
            }
            cpm.innerText = rightChar
            wpm.innerText = rightWord
            accuracy = (rightWord) / wordNum * 100
            if (rightWord == 0) {
                accuracy = 0
            }
            acc.innerText = Math.round(accuracy)
            textN.innerText = letter
        }
    }
}
autoBlock = document.querySelector('.auto')
navBlock = document.querySelector('.navigation')
autoBlock.addEventListener("mouseover", function() {
    navBlock.style.display = "flex";
});
navBlock.addEventListener("mouseover", function() {
    navBlock.style.display = "flex";
});
navBlock.addEventListener("mouseout", function() {
    navBlock.style.display = "none";
});
autoBlock.addEventListener("mouseout", function() {
    navBlock.style.display = "none";
});


setTimeout(() => { speed(word) }, 200)

// document.querySelectorAll('input').forEach( input => {
    //     if (true) {
        //       input.addEventListener('input', function (e) {
            //         var str = e.target.value;
            //         e.target.value = str.toString().replace(/[A-Za-zА-Яа-яЁё]/, '').replace(/\s/g, '').replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
//       });
//     }
//   });