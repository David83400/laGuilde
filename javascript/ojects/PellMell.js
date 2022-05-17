/**
 * Manage the pell mell animation in the discoverApply page
 */
class PellMell {
    /**
     * Constructor of the pellMell
     * @param {HTMLElement} element 
     */
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

    /**
     * Animation of the pell mell
     */
    loadPellMell() {
        this.element.style.transform = "rotate(" + this.rotate + "deg) translateX(" + this.translateX + "px) translateY(" + this.translateY + "px)";
    }

    /**
     * Set up of the middle of the screen to launch the animation when there is an intersection with the pell mell
     */
    onScroll() {
        window.requestAnimationFrame(() => {
            this.screenY = window.scrollY + window.innerHeight / 2;
        });
    }

    /**
     * Manage the observation of intersection between the pell mell and the screen to launch the animation
     * @param {IntersectionObserverEntry[]} entries 
     */
    onIntersection(entries) {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    document.addEventListener('scroll', this.onScroll);
                    this.loadPellMell();
                } else {
                    document.removeEventListener('scroll', this.onScroll);
                }
            } else {
                document.removeEventListener('scroll', this.onScroll);
            }
        }
    }

    /**
     * 
     * @returns {PellMell[]}
     */
    static bind() {
        return Array.from(document.querySelectorAll('[data-animation-rotate], [data-animation-translateX], [data-animation-translateY]')).map((element) => {
            return new PellMell(element);
        });
    }
}

//Call of the méthod for the load of the pell mell animation
PellMell.bind();