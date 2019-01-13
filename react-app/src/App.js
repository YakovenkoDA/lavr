import React, { Component } from 'react';
import ArticleList from './components/ArticleList'
import db from './dbArticles'

import {createStore} from 'redux';

const initialState = {reverted: false};

function reducer (state = {reverted: false}, action){
    switch (action.type){
        case 'REVERT': return { reverted: !state.reverted};
        default: return state;
    }
}

const store = createStore(reducer, initialState);

class App extends Component {
    componentDidMount() {
        store.subscribe(() => this.forceUpdate());
    }

    render() {
        const reverted = store.getState().reverted;
        return (
            <div className="App">
                <h1>
                    App Name {reverted}
                    <button onClick={this.revert}>Revert</button>
                </h1>
                <ArticleList articles={
                    reverted ? db.slice().reverse() : db
                }/>
            </div>
        );
    }

    revert = () => store.dispatch({type: 'REVERT'})
}

export default App;
