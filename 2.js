let $string = ['D','U','M','B','W','A','Y','S','I','D'];

let output=''

for(i=0; i < $string.length; i++){
    output = ''
    
    for(j=0; j < $string.length*2; j++){

        if(j%2===1){

            if(i===j){
                output += $string[i]
            }
            else{
                output += '='
            }
        }
        if(j%2===0){
            output += ' ' 
        }

    }
    console.log(output)
}

