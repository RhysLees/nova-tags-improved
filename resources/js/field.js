import TagGroup from './components/Tags/TagGroup';
import TagGroupItem from './components/Tags/TagGroupItem';
import TagList from './components/Tags/TagList';
import TagListItem from './components/Tags/TagListItem';


Nova.booting((app) => {
  console.log('BOOTING TAGS')
  app.component("TagGroupItem", TagGroupItem);
  app.component("TagListItem", TagListItem);
  app.component("TagGroup", TagGroup);
  app.component("TagList", TagList);
});
