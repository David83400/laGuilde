class PellMell {

    constructor(element) {
        this.element = element;
        this.rotate = parseFloat(this.element.dataset.animationRotate);
        this.translateX = parseFloat(this.element.dataset.animationTranslateX);
        this.translateY = parseFloat(this.element.dataset.animationTranslateY);
        this.screenY;
        this.onScroll = this.onScroll.bind(this)
        this.onIntersection = this.onIntersection.bind(this)
        this.loadPellMell = this.loadPellMell.bind(this)
        const observer = new IntersectionObserver(this.onIntersection)
        observer.observe(element)
    }

    // method to charge the pell mell when scrolling
    loadPellMell() {
        this.element.style.transform = "rotate(" + this.rotate + "deg) translateX(" + this.translateX + "px) translateY(" + this.translateY + "px)";
    }

    onScroll() {
        window.requestAnimationFrame(() => {
            this.screenY = window.scrollY + window.innerHeight / 2;
        });
    }

    onIntersection(entries) {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                document.addEventListener('scroll', this.onScroll);
                this.loadPellMell();
            } else {
                document.removeEventListener('scroll', this.onScroll);
            }
        }
    }

    static bind() {
        return Array.from(document.querySelectorAll('[data-animation-rotate], [data-animation-translateX], [data-animation-translateY]')).map((element) => {
            return new PellMell(element);
        });
    }
}

//Call of the méthode for the load of the pell mell animation
PellMell.bind();