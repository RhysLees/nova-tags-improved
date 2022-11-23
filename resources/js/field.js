import TagGroupItem from './components/Tags/TagGroupItem';
import TagListItem from './components/Tags/TagListItem';


Nova.booting((app) => {
  app.component("TagGroupItem", TagGroupItem);
  app.component("TagListItem", TagListItem);
});
