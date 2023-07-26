export function myTrans(text){
    let key = md5(text.trim());
    if(typeof myLanguages != "undefined" && typeof myLanguages[key] !== 'undefined'){
        //return myLanguages[md5(text.trim())];
        return "abc"  + text;
     }
    if(typeof translateFormData !== 'undefined'){
        translateFormData.append(key,text);
        for (const value of translateFormData.values()) {
            console.log(value);
            break;
        }
    }

    return text + ".";
}
