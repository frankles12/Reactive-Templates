import DataStore from 'flux/stores/DataStore.js'


class Info2 extends React.Component {



    render() {
        let pageData = DataStore.getPageBySlug('infosection2');
        return (
            <div className='info-section2-wrapper'>
                <div className='info-section2 container'>
                    <div className='row outside-header-content'>
                        <div className='container'>
                            <h2 className='info-section2-header col l12 center'>{pageData.acf.header}</h2>
                            <p className='info-section2-description col l12 center'>{pageData.acf.description}</p>
                        </div>
                    </div>
                    <div className='container box-section'>
                        <div className='box-wrapper row'>
                            <div className='inside-box-content container'>
                                <h2 className='info-section2-header2 col l12 center'>{pageData.acf.header_2}</h2>
                                <p className='info-section2-description2 col l12 center'>{pageData.acf.description_2}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className='black-bg' />
            </div>
        )
    }


}

export default Info2;