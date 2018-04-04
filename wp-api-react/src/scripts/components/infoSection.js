import DataStore from 'flux/stores/DataStore.js'

class Info extends React.Component {







    render() {
        let pageData = DataStore.getPageBySlug('infosection');
        return (
            <div className='info-section container'>
                <div className='row'>
                    <img className='info-section-image col l6' src={pageData.acf.left_image}/>
                    <div className='right-side-container col l6'>
                        <div className='row right-side-content'>
                            <h2 className='info-section-header col l12 center'>{pageData.acf.header}</h2>
                            <p className='info-section-description col l12'>{pageData.acf.description}</p>
                        </div>
                    </div>
                    <img className='info-section-image-overlap' src={pageData.acf.image_overlap}/>
                </div>
            </div>
        )
    }

}

export default Info;