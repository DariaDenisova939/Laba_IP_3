var mass_user;
var str_words="area book business case child company country day eye fact family government group hand home job life lot man money month mother night number part people place point problem program question right room school state story student study system thing time water way week woman word work world year ask be become begin call can come could do feel find get give go have hear help keep know leave let like live look make may mean might move need play put run say see seem should show start take talk tell think try turn use want will work would";
var words=str_words.split(" ");
var user_word="";
var memorization_percentage=0;
var leng=words.length;
var res_word="";
function uniqueness(m, element_m){
    let count=0;
    for(let i=0; i<m.length; i++){
        if(m[i]===element_m){
            count++;
        }
    }
    return count;
}
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}
function random_numbers(){
    let res="";
    for(let i=0; i<10; i++){
        res+=parseInt(getRandomArbitrary(0, leng));
        if(i!==9){
            res+=" ";
        }
    }
    return res;
}

function random_words(){
    let result="";
    let mass_num=random_numbers().split(" ");
    for(let i=0; i<mass_num.length; i++){
        if(uniqueness(mass_num, mass_num[i])>1){
            mass_num.splice(i, 1);
            i--;
        }
    }
    for(let j=0; j<mass_num.length; j++){
        result+=words[parseInt(mass_num[j])];
        if(j!==mass_num.length-1){
            result+=", ";
        }
    }
    if(res_word==""){
        res_word=result;
    }
    return res_word;
}
function user_remember(mas_user){
    let m_user=mas_user.split(" ");
    let word_user=random_words().split(", ");
    let count=0;
    if(m_user.length!==0){
        for (let i=0; i<m_user.length; i++){
            for(let j=0; j<word_user.length; j++){
                if(word_user[j]===m_user[i] && m_user[i]!==" "){
                    count++;
                }
            }
        }
    }
    return count/word_user.length*100;
}
function calculation_l5() {
    let result="";
    result=random_words();
    if(result!==""){
        document.getElementById('outresult_lab5').innerText = result;
    }
}
function user_percent(){
    let result="";
    var mass_user=document.getElementById('mass_words');
    if(mass_user.value!=="") {
        memorization_percentage = parseInt(user_remember(mass_user.value));
        result="Percentage of memorized words: "+memorization_percentage+"%";
        document.getElementById('outresult_lab5_1').innerText = result;
    }
    else {
        result+="0%"
        document.getElementById('outresult_lab5_1').innerText = "Percentage of memorized words: " + result;
    }
}