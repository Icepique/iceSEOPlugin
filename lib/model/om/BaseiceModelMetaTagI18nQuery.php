<?php


/**
 * Base class that represents a query for the 'meta_tag_i18n' table.
 *
 * 
 *
 * @method     iceModelMetaTagI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelMetaTagI18nQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     iceModelMetaTagI18nQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     iceModelMetaTagI18nQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method     iceModelMetaTagI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 *
 * @method     iceModelMetaTagI18nQuery groupById() Group by the id column
 * @method     iceModelMetaTagI18nQuery groupByTitle() Group by the title column
 * @method     iceModelMetaTagI18nQuery groupByDescription() Group by the description column
 * @method     iceModelMetaTagI18nQuery groupByKeywords() Group by the keywords column
 * @method     iceModelMetaTagI18nQuery groupByCulture() Group by the culture column
 *
 * @method     iceModelMetaTagI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelMetaTagI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelMetaTagI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelMetaTagI18nQuery leftJoiniceModelMetaTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelMetaTag relation
 * @method     iceModelMetaTagI18nQuery rightJoiniceModelMetaTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelMetaTag relation
 * @method     iceModelMetaTagI18nQuery innerJoiniceModelMetaTag($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelMetaTag relation
 *
 * @method     iceModelMetaTagI18n findOne(PropelPDO $con = null) Return the first iceModelMetaTagI18n matching the query
 * @method     iceModelMetaTagI18n findOneOrCreate(PropelPDO $con = null) Return the first iceModelMetaTagI18n matching the query, or a new iceModelMetaTagI18n object populated from the query conditions when no match is found
 *
 * @method     iceModelMetaTagI18n findOneById(int $id) Return the first iceModelMetaTagI18n filtered by the id column
 * @method     iceModelMetaTagI18n findOneByTitle(string $title) Return the first iceModelMetaTagI18n filtered by the title column
 * @method     iceModelMetaTagI18n findOneByDescription(string $description) Return the first iceModelMetaTagI18n filtered by the description column
 * @method     iceModelMetaTagI18n findOneByKeywords(string $keywords) Return the first iceModelMetaTagI18n filtered by the keywords column
 * @method     iceModelMetaTagI18n findOneByCulture(string $culture) Return the first iceModelMetaTagI18n filtered by the culture column
 *
 * @method     array findById(int $id) Return iceModelMetaTagI18n objects filtered by the id column
 * @method     array findByTitle(string $title) Return iceModelMetaTagI18n objects filtered by the title column
 * @method     array findByDescription(string $description) Return iceModelMetaTagI18n objects filtered by the description column
 * @method     array findByKeywords(string $keywords) Return iceModelMetaTagI18n objects filtered by the keywords column
 * @method     array findByCulture(string $culture) Return iceModelMetaTagI18n objects filtered by the culture column
 *
 * @package    propel.generator.plugins.iceSEOPlugin.lib.model.om
 */
abstract class BaseiceModelMetaTagI18nQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelMetaTagI18nQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelMetaTagI18n', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelMetaTagI18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelMetaTagI18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelMetaTagI18nQuery) {
            return $criteria;
        }
        $query = new iceModelMetaTagI18nQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$id, $culture] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelMetaTagI18n|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelMetaTagI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(iceModelMetaTagI18nPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(iceModelMetaTagI18nPeer::CULTURE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(iceModelMetaTagI18nPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(iceModelMetaTagI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @see       filterByiceModelMetaTag()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelMetaTagI18nPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagI18nPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagI18nPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByKeywords('fooValue');   // WHERE keywords = 'fooValue'
     * $query->filterByKeywords('%fooValue%'); // WHERE keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByKeywords($keywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keywords)) {
                $keywords = str_replace('*', '%', $keywords);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagI18nPeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the culture column
     *
     * Example usage:
     * <code>
     * $query->filterByCulture('fooValue');   // WHERE culture = 'fooValue'
     * $query->filterByCulture('%fooValue%'); // WHERE culture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByCulture($culture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culture)) {
                $culture = str_replace('*', '%', $culture);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagI18nPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query by a related iceModelMetaTag object
     *
     * @param     iceModelMetaTag|PropelCollection $iceModelMetaTag The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function filterByiceModelMetaTag($iceModelMetaTag, $comparison = null)
    {
        if ($iceModelMetaTag instanceof iceModelMetaTag) {
            return $this
                ->addUsingAlias(iceModelMetaTagI18nPeer::ID, $iceModelMetaTag->getId(), $comparison);
        } elseif ($iceModelMetaTag instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelMetaTagI18nPeer::ID, $iceModelMetaTag->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelMetaTag() only accepts arguments of type iceModelMetaTag or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelMetaTag relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function joiniceModelMetaTag($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelMetaTag');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'iceModelMetaTag');
        }

        return $this;
    }

    /**
     * Use the iceModelMetaTag relation iceModelMetaTag object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelMetaTagQuery A secondary query class using the current class as primary query
     */
    public function useiceModelMetaTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelMetaTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelMetaTag', 'iceModelMetaTagQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelMetaTagI18n $iceModelMetaTagI18n Object to remove from the list of results
     *
     * @return    iceModelMetaTagI18nQuery The current query, for fluid interface
     */
    public function prune($iceModelMetaTagI18n = null)
    {
        if ($iceModelMetaTagI18n) {
            $this->addCond('pruneCond0', $this->getAliasedColName(iceModelMetaTagI18nPeer::ID), $iceModelMetaTagI18n->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(iceModelMetaTagI18nPeer::CULTURE), $iceModelMetaTagI18n->getCulture(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}