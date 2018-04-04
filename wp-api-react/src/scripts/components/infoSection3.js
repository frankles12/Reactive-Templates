import DataStore from 'flux/stores/DataStore.js'
import $ from 'jquery';

class Info3 extends React.Component {


    componentDidMount() {
            $('.slider').slider();
    }

    render() {
        let pageData = DataStore.getPageBySlug('infosection3');
        return (
            <div className='info-panel-section container row'>
                <div className='info-panel col l6'>
                    <div className='info-panel-content row'>
                        <h1 className='info-panel-header col l12'>{pageData.acf.header}</h1>
                        <h4 className='info-panel-subheader col l12'>{pageData.acf.subheader}</h4>
                        <p className='info-panel-description col l12'>{pageData.acf.description}</p>
                    </div>
                </div>
                <div className='images-panel col l6'>
                    <div className='slider'>
                            <ul className="slides">
                                <li>
                                    <img className='info-panel-image' src={pageData.acf.image} />
                                </li>
                                <li>
                                    <img className='info-panel-image2' src={pageData.acf.image2} />
                                </li>
                                <li>
                                    <img className='info-panel-image3' src={pageData.acf.image3} />
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        )
    }
}

export default Info3;