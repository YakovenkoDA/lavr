import React, { Component } from 'react';
import './style.css';
import Article from './Article';

class ArticleList extends Component {
    render() {
        return (
            <ul className="article-list">
                {this.getElements()}
            </ul>
        );
    };

    getElements() {
        const {articles} = this.props;
        return articles.map((article, index) =>
            <li key={article.id}>
                <Article article={article} isOpenDef = {index === 0}/>
            </li>
        );
    }
}
export default ArticleList;
