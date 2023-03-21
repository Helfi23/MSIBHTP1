function dataperson(){
    let forms = document.getElementById('frm');
    let nama = forms.name.value;
    let kls = forms.Kelas.value;
    let hoby = forms.hobby.value;
    
    let data =`
    input data : 
    <br> Nama : ${nama} 
    <br> Kelas : ${kls} 
    <br> Hobby : ${hoby}
    `;
    
    document.getElementById('hasil').innerHTML = data;
}