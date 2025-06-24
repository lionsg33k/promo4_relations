import './bootstrap';
const closeFlash = () => {
    if (!flash_msg) return
    flash_msg.classList.add('opacity-0', 'scale-95')
    setTimeout(() => {
        flash_msg.remove()
    }, 500)
}

if (flash_msg) {

    setTimeout(() => {
        flash_msg.classList.remove('opacity-0', 'scale-95')
        flash_msg.classList.add('opacity-100', 'scale-100')
    }, 200)


    flash_close.addEventListener('click', closeFlash)


    setTimeout(() => {
        closeFlash()
    }, 2000)
}