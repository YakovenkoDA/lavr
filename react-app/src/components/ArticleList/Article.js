import React, {Component, PureComponent} from 'react';

class Article extends PureComponent {

    /**
     * Init function
     * may use like:
     * state ={
     *      isOpen: true
     * };
     * @param props
     */
    constructor(props) {
        super(props);
        this.state = {
            isOpen: props.isOpenDef //true
        };
    }

    /**
     * on create
     */
    componentWillMount() {
        //api request
    }

    /**
     * on Update
     * @change: parent
     * @param nextProps
     */
    componentWillReceiveProps(nextProps) {
        if (nextProps.isOpenDef !== this.props.isOpenDef) {
            this.setState({
                isOpen: nextProps.isOpenDef
            })
        }
    }

    /**
     * on Update
     * @change: parent, child
     * @param nextProps
     * @param nextState
     */
    // shouldComponentUpdate(nextProps, nextState){
    //
    // }

    /**
     * on Update
     * @param nextProps
     * @param nextState
     */
    componentWillUpdate(nextProps, nextState){

    }

    /**
     * on delete
     */
    componentWillUnmount(){

    }

    render() {
        const {article} = this.props;
        const body = this.state.isOpen && <section>{article.text}</section>;
        return (
            <div>
                <h2>
                    {article.title}
                    <button onClick={this.close}>
                        {this.state.isOpen ? 'close' : 'open'}
                    </button>
                </h2>
                {body}
                <h3>creation date:{(new Date(article.date)).toDateString()}</h3>
            </div>
        );
    };

    /**
     * on create
     */
    componentDidMount() {

    }

    /**
     * on Update
     * @param prevProps
     * @param prevState
     */
    componentDidUpdate(prevProps, prevState){

    }


    close = () => this.setState({
        isOpen: !this.state.isOpen
    })

}

export default Article;
