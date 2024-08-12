function Like(){
    like.classList.toggle('liked');
    let likes = parseInt(counter.innerHTML);
    counter.innerHTML = likes + 1;

}
