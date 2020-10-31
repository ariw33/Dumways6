var dataKey = ['dumb','ways','the','best'];
var word = 'dumbways';
var output =''

for (let i = 0; i < word.length; i++) {
    
    for (let j = 0; j < dataKey.length; j++) {
        let kata = dataKey[j]
        
        for(let k = 0; k < kata.length; k++){            
                output += word[k]
                console.log(kata+'*')

                if (output === kata) {
                    console.log(output+'<===')
                    output=''
                    
                }   
        }
    }
}

