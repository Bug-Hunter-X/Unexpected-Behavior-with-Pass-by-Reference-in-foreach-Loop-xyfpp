# PHP Foreach Pass-by-Reference Bug

This example demonstrates a subtle bug in PHP related to pass-by-reference in `foreach` loops. When you use `&` to modify elements in-place, it can cause issues if your array contains mixed data types.  The solution highlights best practices to avoid this pitfall.