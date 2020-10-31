var kalimat = ('ta3hun menjela2ng se1lamat b4aru')
let angka = ('123456789')
var output =''
var split = kalimat.split(' ')

for (let i = 0; i < angka.length; i++) {
    
    for (let j = 0; j < split.length; j++) {
        let kata = split[j]

        for(let k = 0; k < split[j].length; k++){
            let huruf = split[j][k]
        
            if (angka[i] === huruf) {
                
               output += kata+' '
               
            }   
        }
    }
}
console.log(output);