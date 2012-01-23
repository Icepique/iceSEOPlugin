<?php


/**
 * Base class that represents a query for the 'meta_tag' table.
 *
 * 
 *
 * @method     iceModelMetaTagQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelMetaTagQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     iceModelMetaTagQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     iceModelMetaTagQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelMetaTagQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelMetaTagQuery groupById() Group by the id column
 * @method     iceModelMetaTagQuery groupByUrl() Group by the url column
 * @method     iceModelMetaTagQuery groupByParameters() Group by the parameters column
 * @method     iceModelMetaTagQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelMetaTagQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelMetaTagQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelMetaTagQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelMetaTagQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelMetaTagQuery leftJoiniceModelMetaTagI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelMetaTagI18n relation
 * @method     iceModelMetaTagQuery rightJoiniceModelMetaTagI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelMetaTagI18n relation
 * @method     iceModelMetaTagQuery innerJoiniceModelMetaTagI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelMetaTagI18n relation
 *
 * @method     iceModelMetaTag findOne(PropelPDO $con = null) Return the first iceModelMetaTag matching the query
 * @method     iceModelMetaTag findOneOrCreate(PropelPDO $con = null) Return the first iceModelMetaTag matching the query, or a new iceModelMetaTag object populated from the query conditions when no match is found
 *
 * @method     iceModelMetaTag findOneById(int $id) Return the first iceModelMetaTag filtered by the id column
 * @method     iceModelMetaTag findOneByUrl(string $url) Return the first iceModelMetaTag filtered by the url column
 * @method     iceModelMetaTag findOneByParameters(string $parameters) Return the first iceModelMetaTag filtered by the parameters column
 * @method     iceModelMetaTag findOneByUpdatedAt(string $updated_at) Return the first iceModelMetaTag filtered by the updated_at column
 * @method     iceModelMetaTag findOneByCreatedAt(string $created_at) Return the first iceModelMetaTag filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelMetaTag objects filtered by the id column
 * @method     array findByUrl(string $url) Return iceModelMetaTag objects filtered by the url column
 * @method     array findByParameters(string $parameters) Return iceModelMetaTag objects filtered by the parameters column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelMetaTag objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelMetaTag objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceSEOPlugin.lib.model.om
 */
abstract class BaseiceModelMetaTagQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelMetaTagQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelMetaTag', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelMetaTagQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelMetaTagQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelMetaTagQuery) {
            return $criteria;
        }
        $query = new iceModelMetaTagQuery();
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
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelMetaTag|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelMetaTagPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelMetaTagPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelMetaTagPeer::ID, $keys, Criteria::IN);
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
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelMetaTagPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the parameters column
     *
     * Example usage:
     * <code>
     * $query->filterByParameters('fooValue');   // WHERE parameters = 'fooValue'
     * $query->filterByParameters('%fooValue%'); // WHERE parameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByParameters($parameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parameters)) {
                $parameters = str_replace('*', '%', $parameters);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagPeer::PARAMETERS, $parameters, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelMetaTagPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelMetaTagPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelMetaTagPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelMetaTagPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelMetaTagPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related iceModelMetaTagI18n object
     *
     * @param     iceModelMetaTagI18n $iceModelMetaTagI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function filterByiceModelMetaTagI18n($iceModelMetaTagI18n, $comparison = null)
    {
        if ($iceModelMetaTagI18n instanceof iceModelMetaTagI18n) {
            return $this
                ->addUsingAlias(iceModelMetaTagPeer::ID, $iceModelMetaTagI18n->getId(), $comparison);
        } elseif ($iceModelMetaTagI18n instanceof PropelCollection) {
            return $this
                ->useiceModelMetaTagI18nQuery()
                ->filterByPrimaryKeys($iceModelMetaTagI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelMetaTagI18n() only accepts arguments of type iceModelMetaTagI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelMetaTagI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function joiniceModelMetaTagI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelMetaTagI18n');

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
            $this->addJoinObject($join, 'iceModelMetaTagI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelMetaTagI18n relation iceModelMetaTagI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelMetaTagI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelMetaTagI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelMetaTagI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelMetaTagI18n', 'iceModelMetaTagI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelMetaTag $iceModelMetaTag Object to remove from the list of results
     *
     * @return    iceModelMetaTagQuery The current query, for fluid interface
     */
    public function prune($iceModelMetaTag = null)
    {
        if ($iceModelMetaTag) {
            $this->addUsingAlias(iceModelMetaTagPeer::ID, $iceModelMetaTag->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // symfony_i18n behavior
  
  /**
   * Adds a JOIN clause to the query using the i18n relation
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelMetaTagQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelMetaTagI18n';
    return $this
      ->joiniceModelMetaTagI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelMetaTagQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelMetaTagI18n');
    $this->with['iceModelMetaTagI18n']->setIsWithOneToMany(false);
    return $this;
  }
  
  /**
   * Use the I18n relation query object
   *
   * @see       useQuery()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelMetaTagI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelMetaTagI18n', 'iceModelMetaTagI18nQuery');
  }

}