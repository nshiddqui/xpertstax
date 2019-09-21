<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Blogs Model
 *
 * @method \App\Model\Entity\Blog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Blog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Blog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Blog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Blog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Blog findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AppTable extends Table {

    public $getColumns;

    public function indexData($options = array()) {
        $data = $this->find('All', $options);
        $this->_setColumnName($data->sql());
        return $data;
    }

    public function getColumns() {
        return $this->getColumns;
    }

    function _setColumnName($string, $start = 'SELECT ', $end = ' FROM') {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) {
            $this->getColumns = '';
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        $query = substr($string, $ini, $len);
        if (strpos($query, '`') != 0) {
            $data = explode(',', $query);
            foreach ($data as $query) {
                if (strpos($query, '_id') != 0) {
                    continue;
                }
                $this->_setColumnName($query, '__', '`');
            }
        }
        if (strpos($query, '__') > 0) {
            return;
        }
        $this->getColumns[$query] = ucwords(str_replace('_', ' ', $query));
    }

}
