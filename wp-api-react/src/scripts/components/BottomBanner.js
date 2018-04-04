import DataStore from 'flux/stores/DataStore.js'


class BottomBanner extends React.Component {

    render(){
        let pageData = DataStore.getPageBySlug('bottombannersection');
        return(
            <div className='bottom-banner-section container'>
                <a className="bottom-button waves-effect waves-light btn-large">Contact Us!</a>
            </div>
        )
    }
}

export default BottomBanner;