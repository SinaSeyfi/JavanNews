jQuery(document).ready(function(){
    document.getElementsByClassName("csf-reset-all")['0'].value = "بازنشانی کل تنظیمات";
    document.getElementsByClassName("csf-reset-all")['1'].value = "بازنشانی کل تنظیمات";
    document.getElementsByClassName("csf-reset-section")['0'].value = "بازنشانی این بخش";
    document.getElementsByClassName("csf-reset-section")['1'].value = "بازنشانی این بخش";
    document.getElementsByClassName("csf-save")['0'].value = "ذخیره";
    document.getElementsByClassName("csf-save")['1'].value = "ذخیره";
    document.getElementsByClassName("csf-form-warning")['0'].innerHTML = "شما تغییرات ذخیره نشده ای دارید، تغییرات خود را ذخیره کنید!";
    document.getElementsByClassName("csf-form-success")['0'].innerHTML = "ذخیره شد";




    var paragraph = document.getElementById("footer-thankyou");
    paragraph.innerHTML += '( <a href="https://exploreit.ir/" target="_blank">تیم اکسپلوریت</a> )'

    paragraph.appendChild(text);

});

