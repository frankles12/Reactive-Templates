import DataStore from 'flux/stores/DataStore.js'
import $ from 'jquery';








class Hero extends React.Component {


    // Use this function in place of jQuery's document.ready function
    componentDidMount() {
        $('.carousel.carousel-slider').carousel({fullWidth: true});
    }




    render() {
        let pageData = DataStore.getPageBySlug('herosection');
        return (
        <div className= 'hero-section'>
            <div className='hero-section row'>
                <div className='col l12 hero-img'>
                    <img className='responsive-img' src={pageData.acf.hero_image}/>
                </div>
            </div>
                <div className='logo'>
                    <img className='center responsive-img' src={pageData.acf.logo}/>
                </div>
                <h5 className='hero-heading'>{pageData.acf.header_text}</h5>

        </div>
        )

    }
}

export default Hero;